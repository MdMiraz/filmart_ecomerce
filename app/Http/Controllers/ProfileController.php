<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile (){
        return view ('admin.profile');
    }
    public function editProfile (){
        return view ('admin.edit.edit_profile');
    }
}
