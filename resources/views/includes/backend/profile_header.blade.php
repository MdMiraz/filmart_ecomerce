<body>
        <div class="wrap">
            <!-- page HEADER -->
            <!-- ========================================================= -->
            <div class="page-header">
                <!-- LEFTSIDE header -->
                <div class="leftside-header">
                    <div class="logo">
                        <a href="{{route('dashboard')}}" class="on-click">
                            <img alt="logo" src="{{URL::to('assets/admin/images/logo1.png')}}" style="height: 36px;padding: 3px;margin-left: 10px;
                            margin-top: 7px;width: 130px;"/>
                        </a>
                    </div>
                    <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
                <!-- RIGHTSIDE header -->
                <div class="rightside-header">
                    <div class="header-middle"></div>
                    <!--NOCITE HEADERBOX-->
                    <div class="header-section hidden-xs" id="notice-headerbox">
                        <!--messages-->
                        <div class="notice" id="messages-notice">
                            <i class="fa fa-users" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span>
                            </i>
                            <div class="dropdown-box basic">
                                <div class="drop-header ">
                                    <h3><i class="fa fa-users" aria-hidden="true"></i> Users</h3>
                                    <span class="badge x-danger b-rounded">120</span>
                                </div>
                                <div class="drop-content">
                                    <div class="widget-list list-left-element">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="left-element"><i class="fa fa-user color-info"></i></div>
                                                    <div class="text">
                                                        <span class="title">67</span>
                                                        <span class="subtitle">New Customer</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="left-element"><i class="fa fa-user color-primary"></i></div>
                                                    <div class="text">
                                                        <span class="title">67</span>
                                                        <span class="subtitle">New Merchant</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="left-element"><i class="fa fa-flag color-success"></i></div>
                                                    <div class="text">
                                                        <span class="title">67</span>
                                                        <span class="subtitle">New Subscriber</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="drop-footer">
                                    <a href="{{route('all-customer')}}">See all Users</a>
                                </div>
                            </div>
                        </div>
                        <!--alerts notices-->
                        <div class="notice" id="alerts-notice">
                            <i class="fa fa-bell-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span></i>
                            <div class="dropdown-box basic">
                                <div class="drop-header">
                                    <h3><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders</h3>
                                    <span class="badge x-danger b-rounded">7</span>
                                </div>
                                <div class="drop-content">
                                    <div class="widget-list list-left-element list-sm">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="left-element"><i class="fa fa-warning color-danger"></i></div>
                                                    <div class="text">
                                                        <span class="title">67</span>
                                                        <span class="subtitle">New Pending Order</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="left-element"><i class="fa fa-flag color-warning"></i></div>
                                                    <div class="text">
                                                        <span class="title">8</span>
                                                        <span class="subtitle">Processing Order</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="left-element"><i class="fa fa-check color-success"></i></div>
                                                    <div class="text">
                                                        <span class="title">14</span>
                                                        <span class="subtitle">Delivered Order</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="drop-footer">
                                    <a href="{{route('processing-order')}}">See all Orders</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-separator"></div>
                    </div>
                    <!--USER HEADERBOX -->
                    <div class="header-section" id="user-headerbox" style="margin-right: 15px">
                        <div class="user-header-wrap">
                            <div class="user-photo">
                                <img alt="profile photo" src="{{URL::to('assets/admin/images/avatar/avatar.jpg')}}" />
                            </div>
                            <div class="user-info">
                                <span class="user-name">Miraz Ahmed</span>
                                <span class="user-profile">Admin</span>
                            </div>
                        </div>
                        <div class="user-options dropdown-box">
                            <div class="drop-content basic">
                                <ul>
                                    <li> <a href="{{route('profile')}}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                    <li> <a href="{{route('lock')}}"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                                    <li><a href="{{route('edit-profile')}}"><i class="fa fa-cog" aria-hidden="true"></i> Profile Setting</a></li>
                                    <li><a href="{{route('sign-in')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>