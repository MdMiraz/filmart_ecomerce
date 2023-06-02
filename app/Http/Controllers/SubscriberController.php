<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Subscriber;
use PDF;
use Session;
session_start();

class SubscriberController extends Controller
{
    public function subscriberList (){
/*
-------------send data subscriberList page
*/
    $subscribers = Subscriber::orderBy('id','DESC')->get();
    	return view ('admin.subscriber_list', compact('subscribers'));
    }
/*
-------------activeSubscriber function
*/
    public function activeSubscriber ($id){
        $subscribers = Subscriber::find($id);
        $subscribers->status = 0;
        $subscribers->save();
        Session::flash('success','Subscriber Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveSubscriber function
*/
public function inactiveSubscriber ($id){
        $subscribers = Subscriber::find($id);
        $subscribers->status = 1;
        $subscribers->save();
        Session::put('success','Subscriber Active Successfully !!!');
        return back();
    }
/*
-------------pdfGenerator in pdf file
*/
    public function pdfGenerator (){
        $subscribers = Subscriber::orderBy('id','DESC')->get();
        $pdf = PDF::loadView('admin.pdf.subscriber_list_pdf', compact('subscribers'));
        return $pdf->stream('subscriber_list.pdf');
    }
}
