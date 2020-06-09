<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Image;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::orderBy('id', 'desc')->get();
    //     return view('admin.categories.index')->with('categories',Category::all());
    // }
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.pages.categories.allCategories')->with('categories',Category::all());
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function store(Request $request)
    {
        // $categories = Category::orderBy('id', 'desc')->get();
        // $brands = Brand::orderBy('id', 'desc')->get();

        $request->validate([
            'cName' => 'required',
            'cDesc' => 'required|max:250',
        ]);

        $category = new Category;     
        $category->name  = $request->cName;
        $category->description = $request->cDesc;
        $category->parent_id = $request->cPar_id;
        

        // insert image
        if($request->hasFile('cImage'))
        {
            $image = $request->file('cImage');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location =  public_path('assets/imgs/categories/' .$img);
            Image::make($image)->save($location);
            $category->image = $img;
            
        }
        
        $category->created_at = now();
        $category->save();
        

        session()->flash('Success','New Category Has Been Added');        
        return redirect()->route('admin.categories.allCategories');
        
    }

    public function edit_Category($id)
    {
        $category = Category::find($id);
        return view('admin.pages.categories.edit_Category')->with('category', $category);
    }

    public function update_category(Request $request, $id)
    {
        
        $category = Category::find($id);
        $category->id  = $request->cId;
        $category->name  = $request->cName;
        $category->description = $request->cDesc;
        $category->parent_id = $request->cPar_id;
        $category->updated_at = now();
        $category->save();

        return redirect()->route('admin.categories.allCategories');
        
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $categories = Category::orderBy('id', 'desc')->get();
        if(!is_null($category))
        {
            $category->delete();
        }
        session()->flash('Success',' Category Has Been Deleted');
        return back();
    }
}
