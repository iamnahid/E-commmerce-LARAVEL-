<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    
    public function search(Request $request)
    {
        $search = $request->search;
        $products = Product::orWhere('title', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orWhere('slug', 'like', '%'.$search.'%')
        ->orWhere('brand_id', 'like', '%'.$search.'%')
        ->orWhere('category_id', 'like', '%'.$search.'%')
        ->paginate(9);
        // return view('pages.index');
        return view('pages.product.search', compact('search', 'products'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // public function products()
    // {
    //     $products = Product::orderBy('id', 'desc')->get();
    //     return view('pages.product.allProducts')->with('products', $products);
    // }
}
