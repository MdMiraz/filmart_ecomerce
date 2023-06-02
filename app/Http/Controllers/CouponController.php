<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\Coupon;
use Session;
session_start();
class CouponController extends Controller
{
public function addCoupon (){
return view ('admin.add.add_coupon');
}
public function allCoupon (){
/*
-------------send data allCoupon page
*/
	$coupons = Coupon::orderBy('id','DESC')->get();
	return view ('admin.all.all_coupon', compact('coupons'));
}
public function editCoupon ($id){
	$coupons = Coupon::find($id);
	return view ('admin.edit.edit_coupon', compact('coupons'));
}
/*-------------saveCoupon function */
public function saveCoupon(Request $request){
/*-------------from validation */
	$request->validate([
		'price_off' => 'required',
		'occassion' => 'required|unique:coupons,occassion'
		]);
/*-------------from validation end */
	$coupon = new Coupon();
		$coupon->coupon_code = Str::random(6);
		$coupon->price_off = $request->price_off;
		$coupon->occassion = $request->occassion;
		$coupon->save();
		Session::flash('success','Coupon Added Successfully !!!');
		return Redirect::to('/all-coupon');
	}
/*
-------------updateCoupon function
*/
public function updateCoupon(Request $request){
	/*
-------------from validation
*/
	$request->validate([
		'price_off' => 'required',
		'occassion' => 'required|unique:coupons,occassion'
		]);
/*
-------------from validation end
*/
		$coupon = Coupon::find($request->id);
		$coupon->price_off = $request->price_off;
		$coupon->occassion = $request->occassion;
		$coupon->save();
		Session::flash('success','Coupon Updated Successfully !!!');
		return Redirect::to('/all-coupon');
	}
/*
-------------activeCoupon function
*/
	public function activeCoupon ($id){
		$coupons = Coupon::find($id);
		$coupons->status = 0;
		$coupons->save();
		Session::flash('success','Coupon Inactive Successfully !!!');
		return back();
}
/*
-------------inactiveCoupon function
*/
public function inactiveCoupon ($id){
	$coupons = Coupon::find($id);
		$coupons->status = 1;
		$coupons->save();
		Session::put('success','Coupon Active Successfully !!!');
				return back();
}
/*
-------------deleteCoupon function
*/
public function deleteCoupon ($id){
		$coupons = Coupon::find($id);		
		$coupons->status = 0;
		$coupons->save();
		$coupons->delete();
		Session::put('success','Coupon Delete Successfully !!!');
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