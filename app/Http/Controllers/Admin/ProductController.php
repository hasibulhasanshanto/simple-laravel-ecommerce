<?php

namespace App\Http\Controllers\Admin;

use App\Model\Product;
use App\Model\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request; 
use Image;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('backend.admin.product.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Products
        $request->validate([
            'title' => 'required|unique:products|max:255', 
            'category_id' => 'required', 
            'brand_id' => 'required', 
            'price' => 'required|numeric',   
            'qty' => 'required|numeric', 
            'description' => 'required', 
            'status' => 'required', 
            //'admin_id' => 'required', 
        ]);
        //return $request->all();

        //Save to Database with Product Object
        $product = new Product();

        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id; 
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->qty = $request->qty;
        $product->description = $request->description;
        $product->status = $request->status;
        //$product->admin_id = $request->admin_id;
        $product->admin_id = 1;
        
        $product->save();        

        // Insert image into ProductImage Model
        if ($request->hasFile('image')) {
            // Insert that image
            $image = $request->file('image');
            $imgName = $product->slug. '.'. $image->getClientOriginalExtension();
            $location = public_path('backend/images/products/'.$imgName);
            Image::make($image)->save($location);

            $product_image = new ProductImage();
            $product_image->product_id = $product->id;
            $product_image->image =  $imgName;
            $product_image->save();
            
        }

        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}