<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class SubSubCategory extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id', 'sub_category_id','sub_sub_category_name', 'sub_sub_category_slug'];

    public function subCategory(){
    	return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
    public function category(){
    	return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function products(){
    	return $this->hasMany(Product::class, 'sub_sub_category_id', 'id');
    }
}
