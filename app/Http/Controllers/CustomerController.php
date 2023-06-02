<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Customer;
use PDF;
use Session;
session_start();

class CustomerController extends Controller
{
    public function allCustomer (){
/*
-------------send data allCustomer page
*/
    $customers = Customer::orderBy('id','DESC')->get();
    	return view ('admin.all.all_customer', compact('customers'));
    }
    public function viewCustomer ($id){
/*
-------------send data viewCustomer page
*/
    $customers = Customer::find($id);
    	return view ('admin.view.view_customer', compact('customers'));
    }
/*
-------------pdfGenerator in pdf file
*/
    public function pdfGenerator ($id){
        $customers = Customer::find($id);
        $pdf = PDF::loadView('admin.pdf.customer_pdf', compact('customers'));
        return $pdf->stream('customer.pdf');
    }
/*
-------------activeCustomer function
*/
    public function activeCustomer ($id){
        $brand = Customer::find($id);
        $brand->status = 0;
        $brand->save();
        Session::flash('success','Customer Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveCustomer function
*/
public function inactiveCustomer ($id){
        $brand = Customer::find($id);
        $brand->status = 1;
        $brand->save();
        Session::put('success','Customer Active Successfully !!!');
        return back();
    }
}
