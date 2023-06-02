<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\Slider;
use Session;
session_start();

class SliderController extends Controller
{
    public function addSlider (){
    	return view ('admin.add.add_slider');
    }
    public function allSlider (){
/*
-------------send data allSlider page
*/
    $slider = Slider::orderBy('id','DESC')->get();
    	return view ('admin.all.all_slider', compact('slider'));
    }
    
/*-------------saveBrand function */
    public function saveSlider(Request $request){
/*-------------from validation */
    $request->validate([
        'img' => 'required'
        ]);
	
    $slider = new Slider();
/*-------------image upload method 2 ------*/

    $image=$request->file('img');
        if($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='uploads/slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $slider->image=$image_url;
                $slider->save();
        Session::flash('success','Slider Added Successfully !!!');
        return Redirect::to('/all-slider');

            }
        }
/*-------------image upload end */
    }

/*
-------------activeSlider function
*/
    public function sliderStatus ($id, $status){
        $slider = Slider::find($id);
        $slider->status = $status;
        $slider->save();
        return response()->json(["message"=>"Success"]);
}    
/*
-------------deleteSlider function
*/
public function deleteSlider ($id){
        $slider = Slider::find($id);       
        $slider->status = 0;
        $slider->save();
        $slider->delete();
        Session::put('success','Slider Delete Successfully !!!');
        return back();
}

}


