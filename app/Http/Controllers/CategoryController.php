<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(){
       $category =Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function creat(Request $request){
        $request  ->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/category');
      // dd($request);
    }
    public function edit($id){
        $edit = Category::find($id);
        return view('admin.category.edit',compact('edit'));
    }
}
