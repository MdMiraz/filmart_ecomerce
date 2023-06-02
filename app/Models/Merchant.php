<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
     use SoftDeletes;

     protected $fillable = ['merchant_name', 'email', 'contact_address', 'mobile_no', 'image'];
}
