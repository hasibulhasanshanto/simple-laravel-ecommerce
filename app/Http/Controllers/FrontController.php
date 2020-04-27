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
}