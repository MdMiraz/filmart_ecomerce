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
                <li><a href="javascript:avoid(0)">User</a></li>
                <li><a href="javascript:avoid(0)">Update Profile</a></li>
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
                    <div class="col-xs-6"><h4>Update Profile Form</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('profile')}}" class="btn btn-primary">Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="{{route('update-profile')}}" id="inline-validation" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                            <h6 class="mb-xlg text-center"><b>Must be fill all <span class="required">*</span> fields and Update!</b></h6><hr>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Your Name<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Your Profession<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="profession" placeholder="Profession" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Facebook Link</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="fb_link" placeholder="facebook link"">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Twitter Link</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="twt_link" placeholder="twitter link"">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Linkdin Link</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lkn_link" placeholder="linkdin link"">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Googleplus Link</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="gpls_link" placeholder="googleplus link"">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Your Email<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Your Mobile No<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="mobile_no" placeholder="Mobile No" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Contact Address<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="cleditor form-control" name="contact_address" placeholder="Contact Address" name="" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Say About Your Interest<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="cleditor form-control" placeholder="Your Interest" name="interest" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Your Image<span class="required">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="image" required>
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