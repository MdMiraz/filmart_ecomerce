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
                <li><a href="javascript:avoid(0)">Categories</a></li>
                <li><a href="javascript:avoid(0)">Sub Sub Category</a></li>
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
                        <div class="col-xs-6"><h4>All Sub Sub Category</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('add-sub-sub-category')}}" class="btn btn-primary">Add Sub Sub Category</a>
                        </div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Total Active Sub Sub Category - <span class="color-primary text-bold">
                        <!--Active Sub Sub Category counting -->
                        <?php
                        $connection = mysqli_connect("localhost","root","","mrshopper");
                        $query = "SELECT status FROM sub_sub_categories Where status=1";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row; ?>                        
                    </span></b></h6><hr>
                    <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>C/Name</th>
                                <th>Sub C/N</th>
                                <th>Sub Sub C/N</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php($i = 1) 
                        @foreach($sub_sub_category as $row)
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ucwords($row->category->category_name)}}</td>
                                <td>{{ucwords($row->subCategory->sub_category_name)}}</td>
                                <td>{{ucwords($row->sub_sub_category_name)}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>
                                    @if($row->status==1)
                                    <span class="label label-success" style="padding: 8px;">Active</span>
                                    @else
                                    <span class="label label-danger" style="padding: 8px;">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if($row->status==1)
                                    <a href="{{route('active-sub-sub-category', $row->id)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Active"><i class="fa fa-thumbs-up"></i></a>
                                    @else
                                    <a href="{{route('inactive-sub-sub-category', $row->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{route('edit-sub-sub-category', $row->id)}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{route('delete-sub-sub-category', $row->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
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