<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Merchant;
use PDF;
use Session;
session_start();

class MerchantController extends Controller
{
    public function allMerchant (){
/*
-------------send data allMerchant page
*/
    $merchants = Merchant::orderBy('id','DESC')->get();
    	return view ('admin.all.all_merchant', compact('merchants'));
    }
    public function viewMerchant ($id){
/*
-------------send data viewMerchant page
*/
    $merchants = Merchant::find($id);
    	return view ('admin.view.view_merchant', compact('merchants'));
    }
/*
-------------pdfGenerator in pdf file
*/
    public function pdfGenerator ($id){
        $merchants = Merchant::find($id);
        $pdf = PDF::loadView('admin.pdf.merchant_pdf', compact('merchants'));
        return $pdf->stream('merchant.pdf');
    }
/*
-------------activeMerchant function
*/
    public function activeMerchant ($id){
        $merchant = Merchant::find($id);
        $merchant->status = 0;
        $merchant->save();
        Session::flash('success','Merchant Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveMerchant function
*/
public function inactiveMerchant ($id){
        $merchant = Merchant::find($id);
        $merchant->status = 1;
        $merchant->save();
        Session::put('success','Merchant Active Successfully !!!');
        return back();
    }
}
