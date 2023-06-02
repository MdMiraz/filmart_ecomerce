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
                <li><a href="javascript:avoid(0)">Edit Sub Admin</a></li>
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
                    <div class="col-xs-6"><h4>Edit Sub Admin Form</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('sub-admin')}}" class="btn btn-primary">All Sub Admin</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="{{route('update-sub-admin')}}" id="inline-validation" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                            <h6 class="mb-xlg text-center"><b>Must be fill all <span class="required">*</span> fields and Update!</b></h6><hr>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Name<span class="required">*</span></label>
                                <div class="col-sm-9">
                                <input type="hidden" name="id" value="{{$sub_admins['id']}}">
                                    <input type="text" name="sub_admin_name" value="{{$sub_admins['sub_admin_name']}}" class="form-control" placeholder="Name" required>
                                    @error('sub_admin_name')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Email<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{$sub_admins['email']}}" class="form-control" placeholder="Email" required>
                                    @error('email')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Contact Address<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="cleditor form-control" placeholder="Contact Address" name="contact_address" value="{{$sub_admins['contact_address']}}" rows="3" required></textarea>
                                    @error('contact_address')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Mobile No<span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <input type="number" name="mobile_no" value="{{$sub_admins['mobile_no']}}" class="form-control" placeholder="Mobile No" required>
                                    @error('mobile_no')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Image<span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" value="{{$sub_admins['image']}}" class="form-control" required>
                                    @error('image')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="checkboxCustom3" value="option1" checked required>
                                    <label class="check" for="checkboxCustom3"><span class="required">*</span>Publication Status</label>
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