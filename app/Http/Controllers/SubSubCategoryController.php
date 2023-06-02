<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\SubCategory; 
use App\Models\SubSubCategory;
use DB;
use Session;
session_start();

class SubSubCategoryController extends Controller
{
    public function subSubCategory (){
/*
-------------send data subSubCategory page
*/
    $sub_sub_category = SubSubCategory::with('subCategory')->get();
    	return view ('admin.sub_sub_category', compact('sub_sub_category'));
    }
    public function addSubSubCategory (){
    	$categories = Category::where('status', 1)
    			->orderBy('category_name','ASC')
    			->get();
    	
        return view ('admin.add.add_sub_sub_category', compact('categories'));
    }
/*-------------loadSubCategory dropdown menu function */
    public function loadSubCategory(Request $request){
        if ($request->has('category_id')) {
           // return DB::table('sub_categories')->where('category_id', $request->category_id)->get();
            return SubCategory::where('category_id', $request->input('category_id'));
        }

    }
/*-------------saveSubSubCategory function */
	public function saveSubSubCategory(Request $request){
/*-------------from validation */
    $request->validate([
    	'category_id' => 'required',
    	'sub_category_id' => 'required',
        'sub_sub_category_name' => 'required|unique:sub_sub_categories,sub_sub_category_name'
        ]);
/*-------------from validation end */
    $sub_sub_category = new SubSubCategory();
        $sub_sub_category->sub_sub_category_name = $request->sub_sub_category_name;
        $sub_sub_category->category_id = $request->category_id;
        $sub_sub_category->sub_category_id = $request->sub_category_id;
        $sub_sub_category->sub_sub_category_slug = $this->slugGenerator($request->sub_sub_category_slug);
        $sub_sub_category->save();
        Session::flash('success','Sub Sub Category Added Successfully !!!');
        return Redirect::to('/sub-sub-category');
    }
    public function editSubSubCategory ($id){
    	$categories = Category::where('status', 1)
    			->orderBy('category_name','ASC')
    			->get();
    	$sub_categories = SubCategory::where('status', 1)
    			->orderBy('sub_category_name','ASC')
    			->get();
        $sub_sub_category = SubSubCategory::find($id);
        return view ('admin.edit.edit_sub_sub_category', compact('sub_sub_category','categories','sub_categories'));
    }
/*
-------------updateSubSubCategory function
*/
public function updateSubSubCategory(Request $request){
    /*
-------------from validation
*/
    $request->validate([
    	'category_id' => 'required',
    	'sub_category_id' => 'required',
        'sub_sub_category_name' => 'required|unique:sub_sub_categories,sub_sub_category_name'
        ]);
/*
-------------from validation end
*/
        $sub_sub_category = SubSubCategory::find($request->id);
        $sub_sub_category->sub_sub_category_name = $request->sub_sub_category_name;
        $sub_sub_category->category_id = $request->category_id;
        $sub_sub_category->sub_category_id = $request->sub_category_id;
        $sub_sub_category->sub_sub_category_slug = $this->slugGenerator($request->sub_sub_category_slug);
        $sub_sub_category->save();
        Session::flash('success','Sub Sub Category Updated Successfully !!!');
        return Redirect::to('/sub-sub-category');
    }
/*
-------------activeSubSubCategory function
*/
    public function activeSubSubCategory ($id){
        $sub_sub_category = SubSubCategory::find($id);
        $sub_sub_category->status = 0;
        $sub_sub_category->save();
        Session::flash('success','Sub Sub Category Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveSubSubCategory function
*/
public function inactiveSubSubCategory ($id){
        $sub_sub_category = SubSubCategory::find($id);
        $sub_sub_category->status = 1;
        $sub_sub_category->save();
        Session::put('success','Sub Sub Category Active Successfully !!!');
        return back();
}
/*
-------------deleteSubSubCategory function
*/
public function deleteSubSubCategory ($id){
        $sub_sub_category = SubSubCategory::find($id);       
        $sub_sub_category->status = 0;
        $sub_sub_category->save();
        $sub_sub_category->delete();
        Session::put('success','Sub Sub Category Delete Successfully !!!');
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
