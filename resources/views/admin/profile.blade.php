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
                <li><a href="javascript:avoid(0)">User Profile</a></li>
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
                    <div class="col-xs-6"><h4>Your Profile</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('edit-profile')}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Update Profile"><i class="fa fa-pencil"></i></a>
                    </div>
                </div><hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--PROFILE-->
                            <div>
                                <div class="profile-photo">
                                    <img alt="User photo" src="{{'assets/admin/'}}images/avatar/avatar_user.jpg" />
                                </div>
                                <div class="user-header-info">
                                    <h2 class="user-name">Jane Doe</h2>
                                    <h5 class="user-position">UI Designer</h5>
                                    <div class="user-social-media">
                                        <span class="text-lg"><a href="#" class="fa fa-twitter-square"></a> <a href="#" class="fa fa-facebook-square"></a> <a href="#" class="fa fa-linkedin-square"></a> <a href="#" class="fa fa-google-plus-square"></a></span>
                                    </div>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--CONTACT INFO-->
                            <div class="panel bg-scale-0 b-primary bt-sm mt-xl col-md-9">
                                <div class="panel-content">
                                    <h4 class=""><b>Contact Information</b></h4>
                                    <ul class="user-contact-info ph-sm">
                                        <li><b><i class="color-primary mr-sm fa fa-envelope"></i></b> jane-doe@email.com</li>
                                        <li><b><i class="color-primary mr-sm fa fa-phone"></i></b> (023) 234 2344</li>
                                        <li><b><i class="color-primary mr-sm fa fa-globe"></i></b> Address</li>
                                        <li class="mt-sm"><b><i class="color-primary mr-sm fa fa-file"></i></b>About Me</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection