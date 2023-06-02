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
                        <div class="col-xs-6"><h4>Stock Management</h4></div>
                        <div class="col-xs-6 text-right">                            
                        </div>
                        </div>
                        <h6 class="mb-xlg text-center"><b>Total Active Products - <span class="color-primary text-bold">
                        <!--Active Sub Category counting -->
                        <?php
                        $connection = mysqli_connect("localhost","root","","mrshopper");
                        $query = "SELECT status FROM products Where status=1";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row; ?>                        
                    </span></b></h6><hr>
                    <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($stock as $row)
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ucwords($row->product_name)}}</td>
                                <td class="center gallery">
                                    <!--default image and uploaded image -->
                                   <a href="{{URL::to($row->image1)}}" title="Product Image"><img src="{{URL::to($row->image1)}}" style="height: 50px; width: 50px"></a>
                                </td>
                                <td>{{$row->stock_quantity}}</td>
                                <td>
                                    @if($row->stock_quantity>=5)
                                    <span class="label label-success" style="padding: 8px;">Available</span>
                                    @elseif($row->stock_quantity>=1)
                                    <span class="label label-warning" style="padding: 8px;">Shortage</span>
                                    @else
                                    <span class="label label-danger" style="padding: 8px;">Unavailable</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('view-stock', $row->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="View Info"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('add-stock', $row->id)}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Update Stock"><i class="fa fa-pencil"></i></a>
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