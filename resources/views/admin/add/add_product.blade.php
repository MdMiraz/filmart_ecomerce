@extends('layouts.dashboard')
@section('breadcrumb')
<!-- CONTENT -->
<!-- ========================================================= -->
<div class="content">
    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Products</a></li>
                <li><a href="javascript:avoid(0)">Add Product</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    @endsection
    @section('content')
    <!--STRIPE-->
    <div class="col-md-12">
        <div class="panel b-primary bt-md">
            <div class="panel-content">
                <div class="row">
                    <div class="col-xs-6"><h4>Add Product Form</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('all-product')}}" class="btn btn-primary">All Products</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="{{route('save-product')}}" id="inline-validation" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <h6 class="mb-xlg text-center"><b>Must be fill all <span class="required">*</span> fields and Save!</b></h6><hr>
                            <div class="form-group">
                                <label for="product_name" class="col-sm-3 control-label">Product Name<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}" placeholder="Product Name" required>
                                    @error('product_name')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="brand_id" class="col-sm-3 control-label">Brand Name<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select name="brand_id" class="form-control" style="width: 100%" required>
                                        <option label="Select Brand" selected="disabled">Select Brand</option>
                                        @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{ucwords($brand->brand_name)}}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category_id" class="col-sm-3 control-label">Category<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select name="category_id" id="category_id" class="form-control" style="width: 100%" required>
                                        <option label="Select Category" selected="disabled">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ucwords($category->category_name)}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sub_category_id" class="col-sm-3 control-label">Sub Category<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select name="sub_category_id" class="form-control" style="width: 100%" id="sub_category_id" required>
                                        <option label="Select Sub Category" selected="disabled">Select Sub Category</option>
                                    </select>
                                    @error('sub_category_id')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sub_sub_category_id" class="col-sm-3 control-label">Sub Sub Category<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select name="sub_sub_category_id" class="form-control" style="width: 100%" required>
                                        <option label="Select Sub Sub Category" selected="disabled">Select Sub Sub Category</option>
                                    </select>
                                    @error('sub_sub_category_id')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_short_description" class="col-sm-3 control-label">Product Short Description<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <textarea class="cleditor form-control" value="{{old('product_short_description')}}" placeholder="Product Short Description" name="product_short_description" rows="3" required></textarea>
                                    @error('product_short_description')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_long_description" class="col-sm-3 control-label">Product Long Description<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <textarea class="cleditor form-control" value="{{old('product_long_description')}}" placeholder="Product Long Description" name="product_long_description" rows="3" required></textarea>
                                    @error('product_long_description')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_price" class="col-sm-3 control-label">Product Price<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="product_price" value="{{old('product_price')}}" placeholder="Price" required>
                                    @error('product_price')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="col-sm-3">Taka</div>
                            </div>
                            <div class="form-group">
                                <label for="product_size" class="col-sm-3 control-label">Product Size<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="product_size" value="{{old('product_size')}}" placeholder="Size" required>
                                    @error('product_size')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="col-sm-3">Small/ Medium/ Large etc</div>
                            </div>
                            <div class="form-group">
                                <label for="product_color" class="col-sm-3 control-label">Product Color<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="product_color" value="{{old('product_color')}}" placeholder="Color" required>
                                    @error('product_color')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="col-sm-3">White/ Red/ Green etc</div>
                            </div>
                            <div class="form-group">
                                <label for="stock_quantity" class="col-sm-3 control-label">Stock Quantity<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="stock_quantity" value="{{old('stock_quantity')}}" placeholder="Stock" required>
                                    @error('stock_quantity')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="row" style="margin: 0 !important;">
                            <div class="form-group col-sm-4">
                                <div class="imgupload">
                                    <div class="file-tab panel-body">
                                        <div>
                                            <button type="button" class="btn btn-default btn-file">
                                            <span>Upload Image 1<span class="required">*</span></span>
                                            <input type="file" name="img1">
                                            </button>
                                            <button type="button" class="btn btn-default">Remove</button>
                                        </div>
                                    </div>
                                    @error('img1')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <div class="imgupload">
                                    <div class="file-tab panel-body">
                                        <div>
                                            <button type="button" class="btn btn-default btn-file">
                                            <span>Upload Image 2<span class="required">*</span></span>
                                            <input type="file" name="img2">
                                            </button>
                                            <button type="button" class="btn btn-default">Remove</button>
                                        </div>
                                    </div>
                                    @error('img2')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <div class="imgupload">
                                    <div class="file-tab panel-body">
                                        <div>
                                            <button type="button" class="btn btn-default btn-file">
                                            <span>Upload Image 3<span class="required">*</span></span>
                                            <input type="file" name="img3">
                                            </button>
                                            <button type="button" class="btn btn-default">Remove</button>
                                        </div>
                                    </div>
                                    @error('img3')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="checkboxCustom3" value="option1" checked required>
                                    <label class="check" for="checkboxCustom3"><span class="required">*</span>Publication Status</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    
    @endsection
