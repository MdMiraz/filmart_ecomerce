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
                <li><a href="javascript:avoid(0)">Users</a></li>
                <li><a href="javascript:avoid(0)">All Merchant</a></li>
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
                        <div class="col-xs-6"><h4>All Merchant</h4></div>
                        <div class="col-xs-6 text-right"></div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Total Active Merchant - <span class="color-primary text-bold"><!--Active Brand counting -->
                    <?php
                    $connection = mysqli_connect("localhost","root","","mrshopper");
                    $query = "SELECT status FROM merchants Where status=1";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                echo $row; ?> </span></b></h6><hr>
                <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Joining Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php($i = 1)
                    @foreach($merchants as $merchant)
                    <tbody>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{$merchant->merchant_name}}</td>
                            <td>{{$merchant->email}}</td>
                            <td>{{$merchant->mobile_no}}</td>
                            <!-- for date formate -->
                            @php ($date = $merchant->created_at)
                            <td>{{ $date = date('d/m/y')}}</td>
                            <td>
                                @if($merchant->status==1)
                                <span class="label label-success" style="padding: 8px;">Active</span>
                                @else
                                <span class="label label-danger" style="padding: 8px;">Banned</span>
                                @endif
                            </td>
                            <td>
                                @if($merchant->status==1)
                                <a href="{{route('active-merchant', $merchant->id)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Active"><i class="fa fa-thumbs-up"></i></a>
                                @else
                                <a href="{{route('inactive-merchant', $merchant->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                                @endif
                                <a href="{{route('view-merchant', $merchant->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="View Info"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    @php($i++)
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>
@endsection