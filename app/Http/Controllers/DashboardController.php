<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard (){
    	return view ('admin.home');
    }
    public function logout (){

    }
    public function lock (){
        return view ('admin.lock');
    }
    public function signIn (){
        return view ('admin.sign_in');
    }
    public function forgotPassword (){
        return view ('admin.forgot_password');
    }
    public function register (){
        return view ('admin.register');
    }
}
