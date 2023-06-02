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
                <li><a href="javascript:avoid(0)">Orders</a></li>
                <li><a href="javascript:avoid(0)">View Delivered Order</a></li>
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
                        <div class="col-xs-6"><h4>Delivered Order Info</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('delivered-order')}}" class="btn btn-primary" style="margin-right:4px;">All Delivered Order</a>
                            <a href="" class="btn btn-primary" data-toggle="tooltip" title="Print Info"><i class="fa fa-print" aria-hidden="true"></i></a>
                        </div>
                    </div><hr>
                    <div class="p-info">
                        <div class="panel-group faq-accordion">
                            <div class="panel panel-accordion">
                                <div class="row">
                                    <div class="col-xs-8" style="padding: 0px !important;padding-left: 15px !important;
                                        ">
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Name:</span> Lorem ipsum</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Brand Name:</span> Lorem ipsum</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Price:</span> Lorem ipsum</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Size:</span> Lorem ipsum</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Color:</span> Lorem ipsum</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Status:</span> Delivered</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4" style="padding: 0px !important;">
                                        <div class="profile-photo">
                                            <img alt="User photo" src="assets/admin/images/avatar/avatar_user.jpg" style="height: 228px !important;
                                            width: 230px !important;">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Customer Name:</span> Lorem ipsum</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Customer's Email:</span> Lorem ipsum</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Customer's Mobile No:</span> Lorem ipsum</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold">Customer's Contact Address:</span><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Merchant Name:</span> Lorem ipsum</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Merchant Email:</span> Lorem ipsum</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Merchant Mobile No:</span> Lorem ipsum</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold">Merchant Contact Address:</span><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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