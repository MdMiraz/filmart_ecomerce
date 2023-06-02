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
                <li><a href="javascript:avoid(0)">Coupon</a></li>
                <li><a href="javascript:avoid(0)">All Coupon</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    @endsection
    @section('content')
    <div class="row animated fadeInRight">
        <!--COLUMNS HIDDEN RESPONSIVE-->
        <div class="col-sm-12">
        @include('includes.backend.message')
            <div class="panel b-primary bt-md">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6"><h4>All Coupon</h4></div>
                        <div cl
                        <div class="col-xs-6 text-right">
                            <a href="{{route('add-coupon')}}" class="btn btn-primary">Add Coupon</a>
                        </div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Total Active Coupon - <span class="color-primary text-bold">
                        <!--Active Brand counting -->
                        <?php
                        $connection = mysqli_connect("localhost","root","","mrshopper");
                        $query = "SELECT status FROM coupons Where status=1";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row; ?> 
                    </span></b></h6><hr>
                    <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Coupon Code</th>
                                <th>Price Off</th>
                                <th>Occation</th>
                                <th>Created</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($coupons as $coupon)
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{strtoupper($coupon->coupon_code)}}</td>
                                <td>{{$coupon->price_off}}%</td>
                                <td>{{$coupon->occassion}}</td>
                                <td>{{ $coupon->created_at}}</td>
                                <td>
                                @if($coupon->status==1)
                                    <span class="label label-success" style="padding: 8px;">Active</span>
                                @else
                                    <span class="label label-danger" style="padding: 8px;">Inactive</span>
                                @endif
                                </td>
                                <td>
                                @if($coupon->status==1)
                                <a href="{{route('active-coupon', $coupon->id)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Active"><i class="fa fa-thumbs-up"></i></a>
                                @else
                                <a href="{{route('inactive-coupon', $coupon->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                                @endif
                                    <a href="{{route('edit-coupon', $coupon->id)}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{route('delete-coupon', $coupon->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @php($i++)
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>
@endsection