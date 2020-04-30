<?php

namespace App\Http\Controllers\Admin;

use App\Model\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->paginate(10);
        return view('backend.admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('backend.admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Brand
        $request->validate([
            'br_name' => 'required|unique:brands|max:255', 
            //'br_description' => 'required', 
            'br_image' => 'required|image|mimes:jpeg,png,jpg|max:1050', 
        ],
        [
            'br_name.required' => 'Please provide a Brand name',
            'br_image.required' => 'Please provide a valid image with .png/ .jpg/ .jpeg extension',

        ]); 

        //Save to Database with Product Object
        $brand = new Brand();

        $brand->br_name = $request->br_name; 
        $brand->br_description = $request->br_description;    
        
        //Insert image into ProductImage Model
        if ($request->hasFile('br_image')) {
            // Insert that image 
            $image = $request->file('br_image');
            $imgName = $brand->br_name.'-'.uniqid().'.'. $image->getClientOriginalExtension();
            $location = public_path('backend/images/brand/'.$imgName);
            Image::make($image)->save($location); 
            
        }
        $brand->br_image =  $imgName;

        $brand->save();

        session()->flash('success', 'Brand Added Sucessfully !!');
        return redirect()->route('brand.index');
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
        $brand = Brand::findOrFail($id);
        return view('backend.admin.brands.edit', compact('brand'));
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
        //Validate Brand
        $request->validate([
            'br_name' => 'required', 
            'br_image' => 'image|mimes:jpeg,png,jpg|max:1050', 
        ],
        [
            'br_name.required' => 'Please provide a Brand name',
            'br_image.required' => 'Please provide a valid image with .png/ .jpg/ .jpeg extension',

        ]); 

        //Save to Database with Product Object
        $brand = Brand::findOrFail($id);

        $brand->br_name = $request->br_name; 
        $brand->br_description = $request->br_description;  
        
        //Insert image into ProductImage Model
        if ($request->br_image) {

            if (File::exists('backend/images/brand/'.$brand->br_image)) {
                File::delete('backend/images/brand/'.$brand->br_image);
            }
            // Insert that image 
            $image = $request->file('br_image');
            $imgName = $brand->br_name.'-'.uniqid().'.'. $image->getClientOriginalExtension();
            $location = public_path('backend/images/brand/'.$imgName);
            Image::make($image)->save($location);  
            $brand->br_image = $imgName;
            
        } else{
            $imgName = $brand->br_image;
        }
        

        $brand->save();

        session()->flash('success', 'Brand Updated Sucessfully !!');
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail( $id);

        if ($brand) { 

            if (File::exists('backend/images/brand/'.$brand->br_image)) {
                File::delete('backend/images/brand/'.$brand->br_image);
            }
            $brand->delete();
        }

        session()->flash('success', 'Brand Deleted Sucessfully !!');
        return back();
    }
}