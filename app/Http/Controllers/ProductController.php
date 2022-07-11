<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('product_id', 'asc')->get();
        return view('home')->with('product',$product);
    }
    public function showProduct($id){
        $product = Product::where('product_id', $id)->get();
        return view('product')->with('product',$product);
    }
}