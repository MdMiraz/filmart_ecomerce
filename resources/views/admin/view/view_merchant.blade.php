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
                <li><a href="javascript:avoid(0)">View Merchant Info</a></li>
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
                        <div class="col-xs-6"><h4>Merchant Info</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('all-merchant')}}" class="btn btn-primary" style="margin-right:4px;">All Merchant</a>
                            <form method="GET" style="display:inline;">
                            @csrf
                            <a href="{{route('print-merchant', $merchants->id)}}" target="_blank" class="btn btn-primary pdf" data-toggle="tooltip" title="Print Info"><i class="fa fa-print" aria-hidden="true"></i></a>
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
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Merchant Name:</span> {{$merchants['merchant_name']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Email:</span> {{$merchants['email']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Mobile No:</span> {{$merchants['mobile_no']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Joining Date:</span>
                                            <!-- for date formate -->
                                            @php ($date = $merchants['created_at'])
                                        {{ $date = date('d/m/y')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3" style="padding: 0px !important;">
                                        <div class="profile-photo gallery">
                                   <a href="{{URL::to($merchants['image'])}}" title="Image"><img alt="User photo" src="{{URL::to($merchants['image'])}}" style="height: 152px !important; width: 167px !important;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Status:</span>
                                    @if($merchants['status']==1)
                                <span style="color: green;display:inline;">Active</span>
                                @else
                                <span style="color: red;display:inline;">Banned</span>
                                @endif
                                    </p>
                                </div>
                                <div class="panel-header bg-scale-0"  style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold">Contact Address:</span><br> {{$merchants['contact_address']}}</p>
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