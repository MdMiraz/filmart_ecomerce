@extends('layouts.dashboard')
@section('breadcrumb') 
<!-- CONTENT -->
<!-- ========================================================= -->
<div class="content">
    <!-- content HEADER  -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Products</a></li>
                <li><a href="javascript:avoid(0)">Product Info</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    @endsection
    @section('content')
    <div class="row animated fadeInRight">
        <!--COLUMNS HIDDEN RESPONSIVE-->
        <div class="col-sm-12">
            <div class="panel b-primary bt-md">
                <div class="panel-content"> 
                    <div class="row">
                        <div class="col-xs-6"><h4>Product Info</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('all-product')}}" class="btn btn-primary" style="margin-right:4px;">All Product</a>
                            <form method="GET" style="display:inline;">
                            @csrf
                            <a href="{{route('print-product', $product->id)}}" target="_blank" class="btn btn-primary pdf" data-toggle="tooltip" title="Print Info"><i class="fa fa-print" aria-hidden="true"></i></a>
                            </form>
                        </div>
                    </div><hr>
                    <div class="p-info">
                        <div class="panel-group faq-accordion">
                            <div class="panel panel-accordion">
                                <div class="row">
                                    <div class="col-xs-10" style="padding: 0px !important;padding-left: 15px !important;
                                        ">
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Name:</span> {{ucwords($product['product_name'])}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Brand Name:</span>
                                        </p>
                                    </div>
                                    <div class="panel-header bg-scale-0">
                                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Category Name:</span> {{ucwords($product['product_name'])}}</p>
                                    </div>
                                </div>
                                <div class="col-xs-2" style="padding: 0px !important;">
                                    <div class="profile-photo gallery">
                                   <a href="{{URL::to($product['image1'])}}" title="Image 1"><img alt="product image" src="{{URL::to($product['image1'])}}" style="height: 114px !important; width: 110px !important;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-header bg-scale-0" style="background: white !important;">
                                <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Sub Category Name:</span> {{ucwords($product['product_name'])}}</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-10" style="padding: 0px !important;padding-left: 15px !important;
                                    ">
                                    <div class="panel-header bg-scale-0">
                                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Sub Sub Category Name:</span> {{ucwords($product['product_name'])}}</p>
                                    </div>
                                    <div class="panel-header bg-scale-0" style="background: white !important;">
                                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Price:</span> {{$product['product_price']}} tk.</p>
                                    </div>
                                    <div class="panel-header bg-scale-0">
                                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Size:</span> {{ucfirst($product['product_size'])}}</p>
                                    </div>
                                </div>
                                <div class="col-xs-2" style="padding: 0px !important;">
                                    <div class="profile-photo gallery">
                                   <a href="{{URL::to($product['image2'])}}" title="Image 2"><img alt="product image"  style="height: 114px !important; width: 110px !important;" src="{{URL::to($product['image2'])}} "></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-header bg-scale-0" style="background: white !important;">
                            <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Color:</span> {{ucwords($product['product_color'])}}</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-10" style="padding: 0px !important;padding-left: 15px !important;
                                ">
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Stock Quantity:</span> {{$product['stock_quantity']}}</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold">Product Short Description:</span><br> {{ucfirst($product['product_short_description'])}}</p>
                                </div>
                            </div>
                            <div class="col-xs-2" style="padding: 0px !important;">
                                <div class="profile-photo gallery">
                                   <a href="{{URL::to($product['image3'])}}" title="Image 3"><img alt="product image" src="{{URL::to($product['image3'])}}" style="height: 114px !important; width: 110px !important;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-header bg-scale-0">
                            <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold">Product Long Description:</span><br> {{ucfirst($product['product_long_description'])}}</p>
                        </div>
                        <div class="panel-header bg-scale-0" style="background: white !important;">
                            <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Uploaded Date & Time:</span> {{$product['created_at']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>
@endsection