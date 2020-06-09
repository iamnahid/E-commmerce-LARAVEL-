<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Image;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.pages.brands.allBrands')->with('brands',Brand::all());
    }

    public function create()
    {
        return view('admin.pages.brands.create');
    }

    public function store(Request $request)
    {
        // $categories = Category::orderBy('id', 'desc')->get();
        // $brands = Brand::orderBy('id', 'desc')->get();

        $request->validate([
            'bId' => 'required',
            'bName' => 'required',
            'bDesc' => 'required|max:250',
        ]);

        $brand = new Brand;
        $brand->id  = $request->bId;
        $brand->name  = $request->bName;
        $brand->description = $request->bDesc;
        

        // insert image
        if($request->hasFile('bImage'))
        {
            $image = $request->file('bImage');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location =  public_path('assets/imgs/brands/' .$img);
            Image::make($image)->save($location);
            $brand->image = $img;
            
        }
        
        $brand->created_at = now();
        $brand->save();
        

        session()->flash('Success','New Brand Has Been Added');        
        return redirect()->route('admin.brands.allBrands');
        
    }

    public function edit_Brand($id)
    {
        $brand = Brand::find($id);
        return view('admin.pages.brands.edit_Brand')->with('brand', $brand);
    }

    public function update_brand(Request $request, $id)
    {
        
        $brand = Brand::find($id);
        $brand->id  = $request->bId;
        $brand->name  = $request->bName;
        $brand->description = $request->bDesc;
        $brand->updated_at = now();
        $brand->save();

        return redirect()->route('admin.brands.allBrands');
        
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $brands = Brand::orderBy('id', 'desc')->get();
        if(!is_null($brand))
        {
            $brand->delete();
        }
        session()->flash('Success',' Brand Has Been Deleted');
        return back();
    }
}
