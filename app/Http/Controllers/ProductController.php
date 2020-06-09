<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::orderBy('id', 'desc')->paginate(9);
        return view('pages.product.allProducts')->with('products', $products);
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)-> first();
        if(!is_null($product))
        {
            return view('pages.product.showProducts', compact('product'));
        }
        else{
            session()->flash('errors', 'Sorry! There is No Product by this URL');
            return redirect()->route('Product');
        }
    }
}
