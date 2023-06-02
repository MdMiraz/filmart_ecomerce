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
                <li><a href="javascript:avoid(0)">All Customers</a></li>
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
                        <div class="col-xs-6"><h4>All Customers</h4></div>
                        <div class="col-xs-6 text-right"></div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Total Active Customers - <span class="color-primary text-bold">
                        <!--Active Brand counting -->
                        <?php
                        $connection = mysqli_connect("localhost","root","","mrshopper");
                        $query = "SELECT status FROM customers Where status=1";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row; ?> 
                    </span></b></h6><hr>
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
                        @foreach($customers as $customer)
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{$customer->customer_name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->mobile_no}}</td>
                                <!-- for date formate -->
                                @php ($date = $customer->created_at)
                                <td>{{ $date = date('d/m/y')}}</td>
                                <td>
                                    @if($customer->status==1)
                                    <span class="label label-success" style="padding: 8px;">Active</span>
                                    @else
                                    <span class="label label-danger" style="padding: 8px;">Banned</span>
                                    @endif
                                </td>
                                <td>
                                    @if($customer->status==1)
                                    <a href="{{route('active-customer', $customer->id)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Active"><i class="fa fa-thumbs-up"></i></a>
                                    @else
                                    <a href="{{route('inactive-customer', $customer->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{route('view-customer', $customer->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="View Info"><i class="fa fa-eye"></i></a>
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