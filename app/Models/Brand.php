<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Brand extends Model
{
    use SoftDeletes;

    protected $fillable = ['brand_name', 'brand_slug', 'image'];

    public function products(){
    	return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
