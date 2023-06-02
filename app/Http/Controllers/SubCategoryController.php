<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\SubCategory;
use Session;
session_start();

class SubCategoryController extends Controller
{
    public function subCategory (){
/*
-------------send data subCategory page
*/
    $sub_category = SubCategory::with('category')->get();
    	return view ('admin.sub_category', compact('sub_category'));
    }
    public function addSubCategory (){
    	$categories = Category::where('status', 1)
    			->orderBy('category_name','ASC')
    			->get();
        return view ('admin.add.add_sub_category', compact('categories'));
    }
/*-------------saveSubCategory function */
public function saveSubCategory(Request $request){
/*-------------from validation */
    $request->validate([
        'category_id' => 'required',
        'sub_category_name' => 'required|unique:sub_categories,sub_category_name'
        ]);
/*-------------from validation end */
    $sub_category = new SubCategory();
        $sub_category->sub_category_name = $request->sub_category_name;
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_slug = $this->slugGenerator($request->sub_category_slug);
        $sub_category->save();
        Session::flash('success','Sub Category Added Successfully !!!');
        return Redirect::to('/sub-category');
    }
    public function editSubCategory ($id){
    	$categories = Category::where('status', 1)
    			->orderBy('category_name','ASC')
    			->get();
        $sub_category = SubCategory::find($id);
        return view ('admin.edit.edit_sub_category', compact('sub_category','categories'));
    }
/*
-------------updateSubCategory function
*/
public function updateSubCategory(Request $request){
    /*
-------------from validation
*/
    $request->validate([
        'category_id' => 'required',
        'sub_category_name' => 'required|unique:sub_categories,sub_category_name'
        ]);
/*
-------------from validation end
*/
        $sub_category = SubCategory::find($request->id);
        $sub_category->sub_category_name = $request->sub_category_name;
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_slug = $this->slugGenerator($request->sub_category_slug);
        $sub_category->save();
        Session::flash('success','Sub Category Updated Successfully !!!');
        return Redirect::to('/sub-category');
    }
/*
-------------activeSubCategory function
*/
    public function activeSubCategory ($id){
        $sub_category = SubCategory::find($id);
        $sub_category->status = 0;
        $sub_category->save();
        Session::flash('success','Sub Category Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveSubCategory function
*/
public function inactiveSubCategory ($id){
        $sub_category = SubCategory::find($id);
        $sub_category->status = 1;
        $sub_category->save();
        Session::put('success','Sub Category Active Successfully !!!');
        return back();
}
/*
-------------deleteSubCategory function
*/
public function deleteSubCategory ($id){
        $sub_category = SubCategory::find($id);       
        $sub_category->status = 0;
        $sub_category->save();
        $sub_category->delete();
        Session::put('success','Sub Category Delete Successfully !!!');
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
