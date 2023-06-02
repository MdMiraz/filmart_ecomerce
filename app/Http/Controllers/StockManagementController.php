<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use Carbon\Carbon;
use PDF;
use Session;
session_start(); 

class StockManagementController extends Controller
{
    /*
-------------send data addStock page
*/
    public function addStock ($id){
        $stock = Product::find($id);
        return view ('admin.add.add_stock', compact('stock'));
    }
    /*
-------------view stock function 
*/
    public function viewStock ($id){
        $stock = Product::find($id);
        return view ('admin.view.view_stock', compact('stock'));
    }
    /*
-------------all stock function 
*/
    public function stockManagement (){
    	$stock = Product::orderBy('id','DESC')->get();
        return view ('admin.stock_management', compact('stock'));
    }
    /*-------------updateStock function */
    public function updateStock(Request $request){
    /*
-------------from validation
*/
    $request->validate([
        'stock_quantity' => 'required'
        ],[
        'stock_quantity.required' => 'Please fill stock quantity'
        ]);
/*
-------------from validation end
*/
        $stock_id = Product::find($request->id);
        $stock_id->stock_quantity = $request->stock_quantity;
        $stock_id->save();
        Session::flash('success','Stock Updated Successfully !!!');
        return Redirect::to('/stock-management');
    }

    /*
-------------pdfGenerator in pdf file
*/
    public function pdfGenerator ($id){
        $stock = Product::find($id);
        $pdf = PDF::loadView('admin.pdf.stock_pdf', compact('stock'));
        return $pdf->stream('stock.pdf');
    }
}
