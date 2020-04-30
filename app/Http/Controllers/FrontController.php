<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage(){
        return view('frontend.pages.index');
    }

    public function product(){
        $products = Product::orderBy('id', 'desc')->get();
        return view('frontend.pages.product.index', compact('products'));
    }

    public function dashboard(){
        return view('backend.admin.index');
    }
    public function singleProduct($slug){
        $product = Product::where('slug', $slug)->first();
        
        if ($product) {
            return view('frontend.pages.product.show', compact('product'));
        } 
        else{
           
            session()->flash('error', 'Sorry !! No product fount in this URL');
            return redirect()->route('products');
        } 
    }

    public function search(Request $request){

        $search = $request->search;
        $products = Product::orWhere('title', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%') 
            ->orderBy('id', 'desc')->paginate(9);

        if ($products) {
            return view('frontend.pages.product.search', compact('products', 'search'));
        } else {             
            session()->flash('error', 'Sorry !! No product found');
            return redirect()->route('products'); 
        }
        
        //return view('frontend.pages.product.search', compact('products', 'search'));
    }
}