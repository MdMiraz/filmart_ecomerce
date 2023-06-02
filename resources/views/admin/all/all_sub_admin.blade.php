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
                <li><a href="javascript:avoid(0)">Sub Admin</a></li>
                <li><a href="javascript:avoid(0)">All Sub Admin</a></li>
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
                        <div class="col-xs-6"><h4>All Sub Admin</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('add-sub-admin')}}" class="btn btn-primary">Add Sub Admin</a>
                        </div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Total Active Sub Admin - <span class="color-primary text-bold">
                        <!--Active Brand counting -->
                        <?php
                        $connection = mysqli_connect("localhost","root","","mrshopper");
                        $query = "SELECT status FROM sub_admins Where status=1";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row; ?> 
                    </span></b></h6><hr>
                    <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Joining Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($sub_admins as $sub_admin)
                        <tbody>
                            <tr>
                                <td>{{$sub_admin->sub_admin_name}}</td>
                                <td class="center gallery">
                                   <a href="{{URL::to($sub_admin->image)}}" title="Image"><img src="{{URL::to($sub_admin->image)}}" style="height: 50px; width: 50px"></a>
                                </td>
                                <td>{{$sub_admin->email}}</td>
                                <td>{{$sub_admin->mobile_no}}</td>
                                <!-- for date formate -->
                                <td>{{$sub_admin->created_at}}</td>
                                <td>
                                    @if($sub_admin->status==1)
                                    <span class="label label-success" style="padding: 8px;">Active</span>
                                    @else
                                    <span class="label label-danger" style="padding: 8px;">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if($sub_admin->status==1)
                                    <a href="{{route('active-sub-admin', $sub_admin->id)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Active"><i class="fa fa-thumbs-up"></i></a>
                                    @else
                                    <a href="{{route('inactive-sub-admin', $sub_admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{route('edit-sub-admin', $sub_admin->id)}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{route('delete-sub-admin', $sub_admin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
                                    <a href="{{route('view-sub-admin', $sub_admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="View Info"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>
@endsection