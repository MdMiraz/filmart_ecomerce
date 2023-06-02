<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\Brand;
use Session;
session_start();

class BrandController extends Controller
{
    public function addBrand (){
    	return view ('admin.add.add_brand');
    }
    public function allBrand (){
/*
-------------send data allBrand page
*/
    $brands = Brand::orderBy('id','DESC')->get();
    	return view ('admin.all.all_brand', compact('brands'));
    }
    public function editBrand ($id){
        $brand = Brand::find($id);
        return view ('admin.edit.edit_brand', compact('brand'));
    }
    
/*-------------saveBrand function */
public function saveBrand(Request $request){
/*-------------from validation */
    $request->validate([
        'brand_name' => 'required|unique:brands,brand_name'
        ]);
/*-------------from validation end */
    $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $this->slugGenerator($request->brand_name);
/*-------------image upload method 1 ------
    $image = $request->file('image');
    $file_ext = $image->getClientOriginalExtension();
    $file_name = date('Ymdhis').$file_ext;
    $upload_path='uploads/brand/';
    $image_url=$upload_path.$file_name;
    $image->move($upload_path, $file_name);

        $brand->image = $image_url;
        $brand->save();
        Session::flash('success','Brand Added Successfully Without Image !!!');
        return Redirect::to('/all-brand');
/*-------------image upload end */

/*-------------image upload method 2 ------*/

$image=$request->file('image');
        if($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='uploads/brand/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $brand->image=$image_url;
                $brand->save();
        Session::flash('success','Brand Added Successfully !!!');
        return Redirect::to('/brand/all-brand');

            }
        }
        $brand->image="";
                $brand->save();
        Session::flash('success','Brand Added Successfully Without Image !!!');
        return Redirect::to('/brand/all-brand');
/*-------------image upload end */
    }
/*
-------------updateCoupon function
*/
public function updateBrand(Request $request){
    /*
-------------from validation
*/
    $request->validate([
        'brand_name' => 'required|unique:brands,brand_name'
        ]);
/*
-------------from validation end
*/
        $brand = Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $this->slugGenerator($request->brand_name);

        /*-------------image upload method 2 ------*/

        $image=$request->file('image');
        if($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='uploads/brand/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $brand->image=$image_url;
                $brand->save();
        Session::flash('success','Brand Updated Successfully !!!');
        return Redirect::to('/brand/all-brand');

            }
        }
        $brand->image="";
                $brand->save();
        Session::flash('success','Brand Updated Successfully Without Image !!!');
        return Redirect::to('/brand/all-brand');
/*-------------image upload end */
    }
/*
-------------activeBrand function
*/
    public function activeBrand ($id){
        $brand = Brand::find($id);
        $brand->status = 0;
        $brand->save();
        Session::flash('success','Brand Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveBrand function
*/
public function inactiveBrand ($id){
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->save();
        Session::put('success','Brand Active Successfully !!!');
                return back();
}
/*
-------------deleteBrand function
*/
public function deleteBrand ($id){
        $brand = Brand::find($id);       
        $brand->status = 0;
        $brand->save();
        $brand->delete();
        Session::put('success','Brand Delete Successfully !!!');
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
