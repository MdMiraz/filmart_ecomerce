<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubAdmin extends Model
{
    use SoftDeletes;

    protected $fillable = ['sub_admin_name', 'email', 'contact_address', 'mobile_no', 'image'];
}
