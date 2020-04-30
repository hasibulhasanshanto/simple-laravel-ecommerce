<?php

namespace App\Http\Controllers\Admin;

use Image; 
use File; 
use App\Model\Category;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('backend.admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = Category::orderBy('cat_name', 'desc')->where('parent_id', NULL)->get();
        return view('backend.admin.category.cat_create', compact('main_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Category
        $request->validate([
            'cat_name' => 'required|unique:categories|max:255', 
            //'cat_description' => 'required', 
            'cat_image' => 'required|image|mimes:jpeg,png,jpg|max:1050', 
        ],
        [
            'cat_name.required' => 'Please provide a Category name',
            'cat_image.required' => 'Please provide a valid image with .png/ .jpg/ .jpeg extension',

        ]);
        //return $request->all();

        //Save to Database with Product Object
        $category = new Category();

        $category->cat_name = $request->cat_name; 
        $category->cat_description = $request->cat_description;  
        $category->parent_id = $request->parent_id;   
        
        //Insert image into ProductImage Model
        if ($request->hasFile('cat_image')) {
            // Insert that image 
            $image = $request->file('cat_image');
            $imgName = $category->cat_name.'-'.uniqid().'.'. $image->getClientOriginalExtension();
            $location = public_path('backend/images/category/'.$imgName);
            Image::make($image)->save($location); 
            
        }
        $category->cat_image =  $imgName;

        $category->save();

        session()->flash('success', 'Category Added Sucessfully !!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main_categories = Category::orderBy('cat_name', 'desc')->where('parent_id', NULL)->get();
        $category = Category::findOrFail($id);
        return view('backend.admin.category.edit', compact('category', 'main_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate Category
        $request->validate([
            'cat_name' => 'required', 
            'cat_image' => 'image|mimes:jpeg,png,jpg|max:1050', 
        ],
        [
            'cat_name.required' => 'Please provide a Category name',
            'cat_image.required' => 'Please provide a valid image with .png/ .jpg/ .jpeg extension',

        ]); 

        //Save to Database with Product Object
        $category = Category::findOrFail($id);

        $category->cat_name = $request->cat_name; 
        $category->cat_description = $request->cat_description;  
        $category->parent_id = $request->parent_id;   
        
        //Insert image into ProductImage Model
        if ($request->cat_image) {

            if (File::exists('backend/images/category/'.$category->cat_image)) {
                File::delete('backend/images/category/'.$category->cat_image);
            }
            // Insert that image 
            $image = $request->file('cat_image');
            $imgName = $category->cat_name.'-'.uniqid().'.'. $image->getClientOriginalExtension();
            $location = public_path('backend/images/category/'.$imgName);
            Image::make($image)->save($location);  
            $category->cat_image = $imgName;
            
        } else{
            $imgName = $category->cat_image;
        }
        

        $category->save();

        session()->flash('success', 'Category Updated Sucessfully !!');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail( $id);

        if ($category) {

            if ($category->parent_id == NULL) {
                $sub_categories = Category::orderBy('cat_name', 'desc')->where('parent_id', $category->id)->get();

                foreach ($sub_categories as $sub) {
                    if (File::exists('backend/images/category/'.$sub->cat_image)) {
                            File::delete('backend/images/category/'.$sub->cat_image);
                        }

                    $sub->delete();
                }
            }

            if (File::exists('backend/images/category/'.$category->cat_image)) {
                File::delete('backend/images/category/'.$category->cat_image);
            }
            $category->delete();
        }

        session()->flash('success', 'Category Deleted Sucessfully !!');
        return back();
    }
}