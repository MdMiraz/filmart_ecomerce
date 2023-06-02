<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\SubAdmin;
use PDF;
use Session;
session_start();

class SubAdminController extends Controller
{
    public function viewSubAdmin ($id){
        /*
-------------send data viewSubAdmin page
*/
        $sub_admins = SubAdmin::find($id);
        return view ('admin.view.view_sub_admin', compact('sub_admins'));
    }
    public function addSubAdmin (){
        return view ('admin.add.add_sub_admin');
    }
    public function allSubAdmin (){
/*
-------------send data allsubAdmin page
*/
    $sub_admins = SubAdmin::orderBy('id','DESC')->get();
        return view ('admin.all.all_sub_admin', compact('sub_admins'));
    }
    public function editSubAdmin ($id){
        /*
-------------send data editSubAdmin page
*/
        $sub_admins = SubAdmin::find($id);
        return view ('admin.edit.edit_sub_admin', compact('sub_admins'));
    }
    
/*-------------saveSubAdmin function */
public function saveSubAdmin(Request $request){
/*-------------from validation */
    $request->validate([
        'sub_admin_name' => 'required',
        'email' => 'required|unique:sub_admins,email',
        'contact_address' => 'required|unique:sub_admins,contact_address',
        'mobile_no' => 'required|unique:sub_admins,mobile_no',
        'image' => 'required'        
        ]);
/*-------------from validation end */
    $sub_admin = new SubAdmin();
        $sub_admin->sub_admin_name = $request->sub_admin_name;
        $sub_admin->email = $request->email;
        $sub_admin->contact_address = $request->contact_address;
        $sub_admin->mobile_no = $request->mobile_no;
/*-------------image upload method 2 ------*/

$image=$request->file('image');
        if($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='uploads/admin/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $sub_admin->image=$image_url;
                $sub_admin->save();
        Session::flash('success','Sub Admin Added Successfully !!!');
        return Redirect::to('/all-sub-admin');

            }
        }
/*-------------image upload end */
    }
/*
-------------updateSubAdmin function
*/
public function updateSubAdmin(Request $request){
    /*
-------------from validation
*/
    $request->validate([
        'sub_admin_name' => 'required',
        'email' => 'required',
        'contact_address' => 'required',
        'mobile_no' => 'required',
        'image' => 'required'        
        ]);
/*
-------------from validation end
*/
        $sub_admin = SubAdmin::find($request->id);
        $sub_admin->sub_admin_name = $request->sub_admin_name;
        $sub_admin->email = $request->email;
        $sub_admin->contact_address = $request->contact_address;
        $sub_admin->mobile_no = $request->mobile_no;

        /*-------------image upload method 2 ------*/

        $image=$request->file('image');
        if($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='uploads/admin/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $sub_admin->image=$image_url;
                $sub_admin->save();
        Session::flash('success','Sub Admin Updated Successfully !!!');
        return Redirect::to('/all-sub-admin');

            }
        }
/*-------------image upload end */
    }
/*
-------------activeSubAdmin function
*/
    public function activeSubAdmin ($id){
        $sub_admin = SubAdmin::find($id);
        $sub_admin->status = 0;
        $sub_admin->save();
        Session::flash('success','Sub Admin Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveSubAdmin function
*/
public function inactiveSubAdmin ($id){
        $sub_admin = SubAdmin::find($id);
        $sub_admin->status = 1;
        $sub_admin->save();
        Session::put('success','Sub Admin Active Successfully !!!');
                return back();
}
/*
-------------deleteSubAdmin function
*/
public function deleteSubAdmin ($id){
        $sub_admin = SubAdmin::find($id);       
        $sub_admin->status = 0;
        $sub_admin->save();
        $sub_admin->delete();
        Session::put('success','Sub Admin Delete Successfully !!!');
        return back();
    }
/*
-------------pdfGenerator in pdf file
*/
    public function pdfGenerator ($id){
        $sub_admins = SubAdmin::find($id);
        $pdf = PDF::loadView('admin.pdf.sub_admin_pdf', compact('sub_admins'));
        return $pdf->stream('sub_admin.pdf');
    }
}
