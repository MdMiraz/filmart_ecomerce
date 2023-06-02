<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pendingOrder (){
    	return view ('admin.new_pending_order');
    }
    public function viewPendingOrder (){
        return view ('admin.view.view_pending_order');
    }
    public function processingOrder (){
    	return view ('admin.processing_order');
    }
    public function changeStatus (){
        return view ('admin.change_status');
    }
    public function confirmedOrder (){
    	return view ('admin.confirmed_order');
    }
    public function deliveredOrder (){
    	return view ('admin.delivered_order');
    }
    public function cancelOrder (){
    	return view ('admin.cancel_order');
    }
    public function viewConfirmedOrder (){
        return view ('admin.view.view_confirmed_order');
    }
    public function viewDeliveredOrder (){
        return view ('admin.view.view_delivered_order');
    }
    public function viewCancelOrder (){
        return view ('admin.view.view_cancel_order');
    }
}
