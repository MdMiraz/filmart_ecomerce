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
                <li><a href="javascript:avoid(0)">Reports</a></li>
                <li><a href="javascript:avoid(0)">View Yearly Report</a></li>
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
                        <div class="col-xs-6"><h4>Yearly Report Info</h4></div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('yearly-report')}}" class="btn btn-primary" style="margin-right:4px;">All Yearly Report</a>
                            <a href="" class="btn btn-primary" data-toggle="tooltip" title="Print Info"><i class="fa fa-print" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Year of <span class="color-primary text-bold">2020</span></b></h6><hr>
                    <div class="p-info">
                        <div class="panel-group faq-accordion">
                            <div class="panel panel-accordion">
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Total Monthly Order:</span><br>January - 45<br><t/> February - 45<br> March - 45<br> April - 45<br> May - 45<br> June - 45<br> July - 45<br> August - 45<br> Septembar - 45<br> Octobar - 45<br> Novembar - 45<br> Decembar - 45</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Total Order:</span> 678</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Total Confirmed Order:</span> 65</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Total Delivered Order:</span> 89</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Total Cancel Order:</span> 98</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Top Selling Brand:</span> Brand Name, Sell- 67</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Top Merchant:</span> Merchant Name, Sell- 65</p>
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