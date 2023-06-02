<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use Carbon\Carbon;
use Session;
session_start();

class CategoryController extends Controller
{
    public function addCategory (){
        return view ('admin.add.add_category');
    }
    public function allCategory (){
/*
-------------send data allCategory page
*/
    $category = Category::orderBy('id','DESC')->get();
    	return view ('admin.all.all_category', compact('category'));
    }
    public function editCategory ($id){
        $category = Category::find($id);
        return view ('admin.edit.edit_category', compact('category'));
    }
/*-------------saveCategory function */
public function saveCategory(Request $request){
/*-------------from validation */
    $request->validate([
        'category_name' => 'required|unique:categories,category_name'
        ]);
/*-------------from validation end */
    $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_slug = $this->slugGenerator($request->category_name);        
        $category->save();
        Session::flash('success','Category Added Successfully !!!');
        return Redirect::to('/category/all-category');
    }
/*
-------------updateCategory function
*/
public function updateCategory(Request $request){
    /*
-------------from validation
*/
    $request->validate([
        'category_name' => 'required|unique:categories,category_name'
        ]);
/*
-------------from validation end
*/
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_slug = $this->slugGenerator($request->category_name);
        $category->save();
        Session::flash('success','Category Updated Successfully !!!');
        return Redirect::to('/category/all-category');
    }
/*
-------------activeCategory function
*/
    public function activeCategory ($id){
        $category = Category::find($id);
        $category->status = 0;
        $category->save();
        Session::flash('success','Category Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveCategory function
*/
public function inactiveCategory ($id){
        $category = Category::find($id);
        $category->status = 1;
        $category->save();
        Session::put('success','Category Active Successfully !!!');
        return back();
}
/*
-------------deleteCategory function
*/
public function deleteCategory ($id){
        $category = Category::find($id);       
        $category->status = 0;
        $category->save();
        $category->delete();
        Session::put('success','Category Delete Successfully !!!');
        return back();
}
/*
-------------slugGenerator function
*/
    public function slugGenerator($string){
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));
    }
}

