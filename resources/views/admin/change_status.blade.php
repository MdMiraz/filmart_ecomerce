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
                <li><a href="javascript:avoid(0)">Oredrs</a></li>
                <li><a href="javascript:avoid(0)">Processing Order</a></li>
                <li><a href="javascript:avoid(0)">Change Status</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    @endsection
    @section('content')
    <!--STRIPE-->
    <div class="col-md-12">
        <div class="panel b-primary bt-md">
            <div class="panel-content">
                <div class="row">
                    <div class="col-xs-6"><h4>Change Status Form</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('processing-order')}}" class="btn btn-primary">All Processing Order</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form id="inline-validation" class="form-horizontal">
                            <h6 class="mb-xlg text-center"><b>Must be fill all <span class="required">*</span> fields and update!</b></h6><hr>
                            <div class="form-group">
                                <label for="select2-example-basic" class="col-sm-3 control-label">Order Status<span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <select name="order" class="form-control" style="width: 100%">
                                        <option label="Select Processing Order"></option>
                                        <option value="Pending">Pending</option>
                                        <option value="Cofirmed">Cofirmed</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    @endsection