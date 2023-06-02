<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_name', 'category_slug'];

    public function subCategories(){
    	return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
    public function subSubCategories(){
    	return $this->hasMany(SubSubCategory::class, 'category_id', 'id');
    }
    public function products(){
    	return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
