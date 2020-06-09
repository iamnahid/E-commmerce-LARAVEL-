<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Product;
use App\ProductImage;
use App\Category;
use App\Brand;
use Image;

class AdminPagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.admin');
    }

    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.pages.product.create', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        // $categories = Category::orderBy('id', 'desc')->get();
        // $brands = Brand::orderBy('id', 'desc')->get();

        $request->validate([
            'cId' => 'required',
            'bId' => 'required',
            'title' => 'required|max:150',
            'desc' => 'required|max:250',
            'quan' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $product = new Product;
        $product->category_id  = $request->cId;
        $product->brand_id  = $request->bId;
        $product->title = $request->title;
        $product->description = $request->desc;
        $product->slug =  Str::slug($request->title);
        $product->quantity = $request->quan;
        $product->price = $request->price;
        $product->admin_id = $request->aId;
        $product->save();

        // ProductImage Model insert image

        // if($request->hasFile('product_image'))
        // {
        //     $image = $request->file('product_image');
        //     $img = time() . '.' . $image->getClientOriginalExtension();
        //     $location =  public_path('assets/imgs/products/pr_' .$img);
        //     Image::make($image)->save($location);

        //     $pro_image = new ProductImage;
        //     $pro_image->product_id = $product->id;
        //     $pro_image->image = $img;
        //     $pro_image->save();
        // }

        if(count($request->product_image) > 0)
        {
            foreach ($request->product_image as $image)
            {
                $img = 'pr_'. date('YmdHis') .'_'. rand() . '.' . $image->getClientOriginalExtension();
                $location =  public_path('assets/imgs/products/' .$img);
                Image::make($image)->save($location);
 
                $pro_image = new ProductImage;
                $pro_image->product_id = $product->id;
                $pro_image->image = $img;
                $pro_image->save();
            }
        }
        session()->flash('Success','Your Product Has Been Added');
        return redirect()->route('admin.product.create');
        
    }

    public function edit()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.pages.product.edit')->with('products', $products);
    }
    
    public function store_edit($id)
    {
        $product = Product::find($id);
        return view('admin.pages.product.store_edit')->with('product', $product);
    }

    public function edit_update(Request $request, $id)
    {
        // $categories = Category::orderBy('id', 'desc')->get();
        // $brands = Brand::orderBy('id', 'desc')->get();

        $request->validate([
            'cId' => 'required',
            'bId' => 'required',
            'title' => 'required|max:150',
            'desc' => 'required|max:250',
            'quan' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $product = Product::find($id);
        $product->category_id  = $request->cId;
        $product->brand_id  = $request->bId;
        $product->title = $request->title;
        $product->description = $request->desc;
        $product->quantity = $request->quan;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->offer_price = $request->o_price;
        $product->save();

        return redirect()->route('admin.product.edit');
        
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $products = Product::orderBy('id', 'desc')->get();
        if(!is_null($product))
        {
            $product->delete();
        }
        session()->flash('Success','Your Product Has Been Deleted');
        return back();
    }
    

}
