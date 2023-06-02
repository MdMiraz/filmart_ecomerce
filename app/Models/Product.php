<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['brand_id', 'category_id', 'sub_category_id', 'sub_sub_category_id', 'product_name', 'product_slug', 'product_short_description', 'product_long_description', 'product_price', 'product_size', 'product_color', 'stock_quantity', 'image1', 'image2', 'image3'];

    public function brand(){
    	return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    public function category(){
    	return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function subCategory(){
    	return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
    public function subSubCategory(){
    	return $this->belongsTo(SubSubCategory::class, 'sub_sub_category_id', 'id');
    }
}
