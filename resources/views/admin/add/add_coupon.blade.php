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
                <li><a href="javascript:avoid(0)">Add Coupon</a></li>
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
                    <div class="col-xs-6"><h4>Add Coupon Form</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('all-coupon')}}" class="btn btn-primary">All Coupon</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="{{route('save-coupon')}}" id="inline-validation" class="form-horizontal">
                        @csrf
                            <h6 class="mb-xlg text-center"><b>Must be fill all <span class="required">*</span> fields and Save!</b></h6><hr>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Price Off<span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <input type="number" data-validation="required" value="{{old('price_off')}}" name="price_off" class="form-control" placeholder="Price Off" required>
                                    @error('price_off')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="col-sm-5">%</div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Occation<span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" data-validation="required" value="{{old('occassion')}}" name="occassion" class="form-control" placeholder="Occation" required>
                                    @error('occassion')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 checkbox-custom checkbox-primary">
                                    <input type="checkbox" data-validation="required" name="status" checked required>
                                    <label class="check" for="checkboxCustom3"><span class="required">*</span>Publication Status</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Generate Coupon</button>
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