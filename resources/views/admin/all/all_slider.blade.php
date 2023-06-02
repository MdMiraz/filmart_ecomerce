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
                <li><a href="javascript:avoid(0)">Slider</a></li>
                <li><a href="javascript:avoid(0)">All Slider</a></li>
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
                        <div class="col-xs-6"><h4>All Slider</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('add-slider')}}" class="btn btn-primary">Add Slider</a>
                        </div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Total Active Slider - <span class="color-primary text-bold">
                        <!--Active Brand counting -->
                        <?php
                        $connection = mysqli_connect("localhost","root","","mrshopper");
                        $query = "SELECT status FROM sliders Where status=1";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row; ?> 
                    </span></b></h6><hr>
                    <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Image</th>
                                <th>Upload Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         @php($i = 1)
                        @foreach($slider as $row)
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td class="center gallery">
                                    <!--default image and uploaded image -->
                                   <a href="{{URL::to($row->image)}}" title="Slider Image"><img src="{{URL::to($row->image)}}" style="height: 50px; width: 50px">
                                </td>
                                <td>{{ $row->created_at}}</td>
                                <td>
                                <input type="checkbox" data-size="mini" data-onstyle="success" data-offstyle="warning" data-toggle="toggle" data-on="Active" data-off="Inactive" id="status" data-id="{{ $row->id }}" {{$row->status==1 ? 'checked':''}}>
                                </td>
                                <td>
                                    <a href="{{route('delete-slider', $row->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
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