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
                <li><a href="javascript:avoid(0)">Add Category</a></li>
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
                    <div class="col-xs-6"><h4>Add Category Form</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('all-category')}}" class="btn btn-primary">All Category</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="{{route('save-category')}}" id="inline-validation" class="form-horizontal">
                        @csrf
                            <h6 class="mb-xlg text-center"><b>Must be fill all <span class="required">*</span> fields and Save!</b></h6><hr>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Category Name<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category_name" value="{{old('category_name')}}" placeholder="Category Name" required>
                                    @error('category_name')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="checkboxCustom3" checked required>
                                    <label class="check" for="checkboxCustom3"><span class="required">*</span>Publication Status</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Save</button>
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