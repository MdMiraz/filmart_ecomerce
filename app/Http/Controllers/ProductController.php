<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Product;
use Image;
use PDF;
use Carbon\Carbon;
use Session;
session_start();

class ProductController extends Controller
{
/*
-------------send data addProduct page
*/
    public function addProduct (){
        $brands = Brand::where('status', 1)
                ->orderBy('brand_name','ASC')
                ->get();
        $categories = Category::where('status', 1)
                ->orderBy('category_name','ASC')
                ->get();
    /*    $sub_categories = SubCategory::where('status', 1)
                ->orderBy('sub_category_name','ASC')
                ->get();
        $sub_sub_categories = SubSubCategory::where('status', 1)
                ->orderBy('sub_sub_category_name','ASC')
                ->get();
    */
    	return view ('admin.add.add_product', compact('brands','categories'));
    }

/*
-------------send data allProduct page 
*/
    public function allProduct (){
        $product = Product::orderBy('id','DESC')->get();
        return view ('admin.all.all_product', compact('product'));
    }
/*
-------------send data editProduct page
*/
    public function editProduct ($id){
        $product = Product::find($id);
        $brand = Product::with('brand')->get();
        $category = Product::with('subSubCategory')->get();

        $brands = Brand::where('status', 1)
                ->orderBy('brand_name','ASC')
                ->get();
        $categories = Category::where('status', 1)
                ->orderBy('category_name','ASC')
                ->get();

        return view ('admin.edit.edit_product', compact('product','category','brand','
            brands','categories'));
    }
/*
-------------pdfGenerator  in pdf file
*/
    public function pdfGenerator ($id){
        $product = Product::find($id);
        $pdf = PDF::loadView('admin.pdf.product_pdf', compact('product'));
        return $pdf->stream('product.pdf');
    }
/*
-------------send data viewProduct page
*/
    public function viewProduct ($id){
        $product = Product::find($id);
        $brand = Product::with('brand')->get();
        $category = Product::with('subSubCategory')->get();

        return view ('admin.view.view_product', compact('product','category','brand'));
    }
        
/*-------------saveProduct function */
public function saveProduct(Request $request){
/*-------------from validation */
    $request->validate([
        'product_name' => 'required',
        'product_long_description' => 'required',
        'product_short_description' => 'required',
        'product_price' => 'required',
        'product_size' => 'required',
        'img1' => 'required|mimes:jpg,jpeg,png',
        'img2' => 'required|mimes:jpg,jpeg,png',
        'img3' => 'required|mimes:jpg,jpeg,png',
        'brand_id' => 'required',
        'category_id' => 'required',
        'sub_category_id' => 'required',
        'sub_sub_category_id' => 'required',
        'product_color' => 'required',
        'stock_quantity' => 'required'
        ],[
        'product_name.required' => 'Please fill product name',
        'product_long_description.required' => 'Please fill product description',
        'product_short_description.required' => 'Please fill product description',
        'product_price.required' => 'Please fill product price',
        'product_size.required' => 'Please fill product size',
        'img1.required' => 'Please upload jpg,jpeg,png formate image',
        'img2.required' => 'Please upload jpg,jpeg,png formate image',
        'img3.required' => 'Please upload jpg,jpeg,png formate image',
        'brand_id.required' => 'Please fill brand name',
        'category_id.required' => 'Please fill category name',
        'sub_category_id.required' => 'Please fill sub category name',
        'sub_sub_category_id.required' => 'Please fill sub sub category name',
        'product_color.required' => 'Please fill product color',
        'stock_quantity.required' => 'Please fill product stock'
        ]);
/*-------------from validation end */
/*-------------data insert method 1 */
/*-------------image1 upload */
        $image1 = $request->file('img1');
        $file_ext = $image1->getClientOriginalExtension();
        $file_name = hexdec(uniqid()).'.'.$file_ext;
        $upload_path='uploads/product/';
        $image1_url=$upload_path.$file_name;
        Image::make($image1)->save($image1_url);
/*-------------image2 upload */
        $image2 = $request->file('img2');
        $file_ext = $image2->getClientOriginalExtension();
        $file_name = hexdec(uniqid()).'.'.$file_ext;
        $upload_path='uploads/product/';
        $image2_url=$upload_path.$file_name;
        Image::make($image2)->save($image2_url);
/*-------------image3 upload */
        $image3 = $request->file('img3');
        $file_ext = $image3->getClientOriginalExtension();
        $file_name = hexdec(uniqid()).'.'.$file_ext;
        $upload_path='uploads/product/';
        $image3_url=$upload_path.$file_name;
        Image::make($image3)->save($image3_url);
/*-------------data insert */
        Product::insert([
        'product_name' => $request->product_name,
        'product_slug' => $this->slugGenerator($request->product_name),
        'product_long_description' => $request->product_long_description,
        'product_short_description' => $request->product_short_description,
        'product_price' => $request->product_price,
        'product_size' => $request->product_size,
        'image1' => $image1_url,
        'image2' => $image2_url,
        'image3' => $image3_url,
        'category_id' => $request->category_id,
        'brand_id' => $request->brand_id,
        'sub_category_id' => $request->sub_category_id,
        'sub_sub_category_id' => $request->sub_sub_category_id,
        'product_color' => $request->product_color,
        'stock_quantity' => $request->stock_quantity,
        'created_at' => Carbon::now()
        ]);
        Session::flash('success','Product Added Successfully !!!');
        return Redirect::to('/product/all-product');

/*-------------data insert method 2 *
    $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_slug = $this->slugGenerator($request->product_name);
        $product->product_price = $request->product_price;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->stock_quantity = $request->stock_quantity;
        $product->product_long_description = $request->product_long_description;
        $product->product_short_description = $request->product_short_description;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->sub_sub_category_id = $request->sub_sub_category_id;
/*-------------image upload method 1 ------*
    $image = $request->file('img1');
    $file_ext = $image->getClientOriginalExtension();
    $file_name = date('Ymdhis').$file_ext;
    $upload_path='uploads/product/';
    $image_url=$upload_path.$file_name;
    $image->move($upload_path, $file_name);

        $product->image1 = $image_url;
        $product->save();
        Session::flash('success','Product Added Successfully Without Image !!!');
        return Redirect::to('/all-product');
/*-------------image upload end */

/*-------------image upload method 2 ------*

$image=$request->file('image');
        if($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='uploads/product/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $product->image1=$image_url;
                $product->save();
        Session::flash('success','Product Added Successfully !!!');
        return Redirect::to('/all-product');

            }
        }
/*-------------image upload end */
    }
/*-------------updateProduct function */
public function updateProduct(Request $request){
    /*
-------------from validation
*/
    $request->validate([
        'product_name' => 'required',
        'product_long_description' => 'required',
        'product_short_description' => 'required',
        'product_price' => 'required',
        'product_size' => 'required',
        'img1' => 'required|mimes:jpg,jpeg,png',
        'img2' => 'required|mimes:jpg,jpeg,png',
        'img3' => 'required|mimes:jpg,jpeg,png',
        'brand_id' => 'required',
        'category_id' => 'required',
        'sub_category_id' => 'required',
        'sub_sub_category_id' => 'required',
        'product_color' => 'required',
        'stock_quantity' => 'required'
        ],[
        'product_name.required' => 'Please fill product name',
        'product_long_description.required' => 'Please fill product description',
        'product_short_description.required' => 'Please fill product description',
        'product_price.required' => 'Please fill product price',
        'product_size.required' => 'Please fill product size',
        'img1.required' => 'Please upload jpg,jpeg,png formate image',
        'img2.required' => 'Please upload jpg,jpeg,png formate image',
        'img3.required' => 'Please upload jpg,jpeg,png formate image',
        'brand_id.required' => 'Please fill brand name',
        'category_id.required' => 'Please fill category name',
        'sub_category_id.required' => 'Please fill sub category name',
        'sub_sub_category_id.required' => 'Please fill sub sub category name',
        'product_color.required' => 'Please fill product color',
        'stock_quantity.required' => 'Please fill product stock'
        ]);
/*
-------------from validation end
*/
        $product_id = Product::find($request->id);
/*-------------data insert method 1 */
/*-------------image1 upload */
        $image1 = $request->file('img1');
        $file_ext = $image1->getClientOriginalExtension();
        $file_name = hexdec(uniqid()).'.'.$file_ext;
        $upload_path='uploads/product/';
        $image1_url=$upload_path.$file_name;
        Image::make($image1)->save($image1_url);
/*-------------image2 upload */
        $image2 = $request->file('img2');
        $file_ext = $image2->getClientOriginalExtension();
        $file_name = hexdec(uniqid()).'.'.$file_ext;
        $upload_path='uploads/product/';
        $image2_url=$upload_path.$file_name;
        Image::make($image1)->save($image2_url);
/*-------------image3 upload */
        $image3 = $request->file('img3');
        $file_ext = $image3->getClientOriginalExtension();
        $file_name = hexdec(uniqid()).'.'.$file_ext;
        $upload_path='uploads/product/';
        $image3_url=$upload_path.$file_name;
        Image::make($image1)->save($image3_url);
/*-------------data insert */
        Product::findOrFail($product_id)->update([
        'product_name' => $request->product_name,
        'product_slug' => $this->slugGenerator($request->product_name),
        'product_long_description' => $request->product_long_description,
        'product_short_description' => $request->product_short_description,
        'product_price' => $request->product_price,
        'product_size' => $request->product_size,
        'image1' => $image1_url,
        'image2' => $image2_url,
        'image3' => $image3_url,
        'category_id' => $request->category_id,
        'brand_id' => $request->brand_id,
        'sub_category_id' => $request->sub_category_id,
        'sub_sub_category_id' => $request->sub_sub_category_id,
        'product_color' => $request->product_color,
        'stock_quantity' => $request->stock_quantity,
        'updated_at' => Carbon::now()
        ]);
        Session::flash('success','Product Updated Successfully !!!');
        return Redirect::to('/product/all-product');
}
/*
-------------activeProduct function 
*/
public function activeProduct ($id){
        $product = Product::find($id);
        $product->status = 0;
        $product->save();
        Session::flash('success','Product Inactive Successfully !!!');
        return back();
}
/*
-------------inactiveProduct function
*/
public function inactiveProduct ($id){
        $product = Product::find($id);
        $product->status = 1;
        $product->save();
        Session::put('success','Product Active Successfully !!!');
                return back();
}
/*
-------------deleteProduct function
*/
public function deleteProduct ($id){
        $product = Product::find($id);       
        $product->status = 0;
        $product->save();
        $product->delete();
        Session::put('success','Product Delete Successfully !!!');
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
