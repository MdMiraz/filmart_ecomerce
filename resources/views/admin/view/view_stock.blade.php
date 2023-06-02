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
                <li><a href="javascript:avoid(0)">Stock Management</a></li>
                <li><a href="javascript:avoid(0)">View Stock</a></li>
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
                        <div class="col-xs-6"><h4>Stock Info</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('stock-management')}}" class="btn btn-primary" style="margin-right:4px;">Stock Management</a>
                            <form method="GET" style="display:inline;">
                            @csrf
                            <a href="{{route('print-stock', $stock->id)}}" target="_blank" class="btn btn-primary pdf" data-toggle="tooltip" title="Print Info"><i class="fa fa-print" aria-hidden="true"></i></a>
                            </form>
                        </div>
                    </div><hr>
                    <div class="p-info">
                        <div class="panel-group faq-accordion">
                            <div class="panel panel-accordion">
                                <div class="row">
                                    <div class="col-xs-9" style="padding: 0px !important;padding-left: 15px !important;
                                        ">
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Id:</span> {{$stock['id']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Name:</span> {{ucwords($stock['product_name'])}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Price:</span> {{$stock['product_price']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Stock Quantity:</span> {{$stock['stock_quantity']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Stock Status:</span> 
                                            @if($stock['stock_quantity']>=5)
                                            <span style="color: green;display:inline;">Available</span>
                                            @elseif($stock['stock_quantity']>=1)
                                            <span style="color: #f0ad4e;display:inline;">Shortage</span>
                                            @else
                                            <span style="color: red;display:inline;">Unavailable</span>
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3" style="padding: 0px !important;">
                                        <div class="profile-photo gallery">
                                        <a href="{{URL::to($stock['image1'])}}" title="Image 1"><img alt="product image" src="{{URL::to($stock['image1'])}}" style="height: 190px !important; width: 168px !important;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Size:</span> {{$stock['product_size']}}</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Color:</span> {{$stock['product_color']}}</p>
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