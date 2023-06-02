<!-- page BODY -->
<!-- ========================================================= -->
<div class="page-body">
    <!-- LEFT SIDEBAR -->
    <!-- ========================================================= -->
    <div class="left-sidebar">
        <!-- left sidebar HEADER -->
        <div class="left-sidebar-header">
            <div class="left-sidebar-title">Navigation</div>
            <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                <span></span>
            </div>
        </div>
        <!-- NAVIGATION -->
        <!-- ========================================================= -->
        <div id="left-nav" class="nano">
            <div class="nano-content">
                <nav>
                    <ul class="nav nav-left-lines" id="main-nav">
                        <!--HOME-->
                        <li class="{{request()->is('dashboard') ? 'active-item':''}}"><a href="{{route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                        <!--Brand-->
                        <li class="has-child-item close-item
                            <?php if(request()->is('add-brand')){
                            echo 'add-brand' ? 'open-item':'';
                            }
                            else if(request()->is('all-brand')){
                            echo 'all-brand' ? 'open-item':'';
                            }
                            else if(request()->is('edit-brand')){
                            echo 'edit-brand' ? 'active-item':'';
                            }
                            ?>
                            ">
                            <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Brand</span></a>
                            <ul class="nav child-nav level-1">
                                <li class="{{request()->is('add-brand') ? 'active-item':''}}"><a href="{{route('add-brand')}}">Add Brand</a></li>
                                <li class="{{request()->is('all-brand') ? 'active-item':''}}"><a href="{{route('all-brand')}}">All Brand</a></li>
                            </ul>
                        </li>
                        <!--Categories-->
                        <li class="has-child-item close-item
                            <?php if(request()->is('all-category')){
                            echo 'all-category' ? 'open-item':'';
                            }
                            else if(request()->is('add-category')){
                            echo 'add-category' ? 'active-item':'';
                            }
                            else if(request()->is('edit-category')){
                            echo 'edit-category' ? 'active-item':'';
                            }
                            else if(request()->is('sub-category')){
                            echo 'sub-category' ? 'open-item':'';
                            }
                            else if(request()->is('add-sub-category')){
                            echo 'add-sub-category' ? 'active-item':'';
                            }
                            else if(request()->is('edit-sub-category')){
                            echo 'edit-sub-category' ? 'active-item':'';
                            }
                            else if(request()->is('sub-sub-category')){
                            echo 'sub-sub-category' ? 'open-item':'';
                            }
                            else if(request()->is('add-sub-sub-category')){
                            echo 'add-sub-sub-category' ? 'active-item':'';
                            }
                            else if(request()->is('edit-sub-sub-category')){
                            echo 'edit-sub-sub-category' ? 'active-item':'';
                            }
                            ?>
                            ">
                            <a><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span> </a>
                            <ul class="nav child-nav level-1">
                                <li class="{{request()->is('all-category') ? 'active-item':''}}"><a href="{{route('all-category')}}">All Category</a></li>
                                <li class="{{request()->is('sub-category') ? 'active-item':''}}"><a href="{{route('sub-category')}}">Sub Category</a></li>
                                <li class="{{request()->is('sub-sub-category') ? 'active-item':''}}"><a href="{{route('sub-sub-category')}}">Sub Sub Category</a></li>
                            </ul>
                        </li>
                        <!--Slider-->
                        <li class="has-child-item close-item
                            <?php if(request()->is('add-slider')){
                            echo 'add-slider' ? 'open-item':'';
                            }
                            else if(request()->is('all-slider')){
                            echo 'all-slider' ? 'open-item':'';
                            }
                            ?>
                            ">
                            <a><i class="fa fa-book" aria-hidden="true"></i><span>Slider </span></a>
                            <ul class="nav child-nav level-1">
                                <li class="{{request()->is('add-slider') ? 'active-item':''}}"><a href="{{route('add-slider')}}">Add Slider</a></li>
                                <li class="{{request()->is('all-slider') ? 'active-item':''}}"><a href="{{route('all-slider')}}">All Slider</a></li>
                            </ul>
                        </li>
                        <!--Products-->
                        <li class="has-child-item close-item
                            <?php if(request()->is('add-product')){
                            echo 'add-product' ? 'open-item':'';
                            }
                            else if(request()->is('all-product')){
                            echo 'all-product' ? 'open-item':'';
                            }
                            else if(request()->is('edit-product')){
                            echo 'edit-product' ? 'active-item':'';
                            }
                            else if(request()->is('view-product')){
                            echo 'view-product' ? 'active-item':'';
                            }
                            ?>
                            ">
                            <a><i class="fa fa-table" aria-hidden="true"></i><span>Products</span></a>
                            <ul class="nav child-nav level-1">
                                <li class="{{request()->is('add-product') ? 'active-item':''}}"><a href="{{route('add-product')}}">Add Product</a></li>
                                <li class="{{request()->is('all-product') ? 'active-item':''}}"><a href="{{route('all-product')}}">All Products</a></li>
                            </ul>
                        </li>
                        <!--Coupon-->
                        <li class="close-item
                            <?php if(request()->is('add-coupon')){
                            echo 'add-coupon' ? 'open-item':'';
                            }
                            else if(request()->is('all-coupon')){
                            echo 'all-coupon' ? 'open-item':'';
                            }
                            else if(request()->is('edit-coupon')){
                            echo 'edit-coupon' ? 'active-item':'';
                            }
                            ?>
                            ">
                            <a href="{{route('all-coupon')}}"><i class="fa fa-bookmark" aria-hidden="true"></i><span>Coupon</span></a>
                        </li>
                        <!--Stock Management-->
                        <li class="close-item
                            <?php if(request()->is('stock-management')){
                            echo 'stock-management' ? 'active-item':'';
                            }
                            else if(request()->is('add-stock')){
                            echo 'add-stock' ? 'active-item':'';
                            }
                            else if(request()->is('view-stock')){
                            echo 'view-stock' ? 'active-item':'';
                            }
                            ?>
                            ">
                            <a href="{{route('stock-management')}}"><i class="fa fa-archive" aria-hidden="true"></i><span>Stock Management</span></a>
                        </li>
                        <!--Orders-->
                        <li class="has-child-item close-item
                            <?php if(request()->is('pending-order')){
                            echo 'pending-order' ? 'open-item':'';
                            }
                            else if(request()->is('view-pending-order')){
                            echo 'view-pending-order' ? 'active-item':'';
                            }
                            else if(request()->is('processing-order')){
                            echo 'processing-order' ? 'open-item':'';
                            }
                            else if(request()->is('change-status')){
                            echo 'processing-order' ? 'active-item':'';
                            }
                            else if(request()->is('confirmed-order')){
                            echo 'confirmed-order' ? 'open-item':'';
                            }
                            else if(request()->is('view-confirmed-order')){
                            echo 'view-confirmed-order' ? 'active-item':'';
                            }
                            else if(request()->is('delivered-order')){
                            echo 'delivered-order' ? 'open-item':'';
                            }
                            else if(request()->is('view-delivered-order')){
                            echo 'view-delivered-order' ? 'active-item':'';
                            }
                            else if(request()->is('cancel-order')){
                            echo 'cancel-order' ? 'open-item':'';
                            }
                            else if(request()->is('view-cancel-order')){
                            echo 'view-cancel-order' ? 'active-item':'';
                            }
                            ?>
                            ">
                            <a><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a>
                            <ul class="nav child-nav level-1">
                                <li class="{{request()->is('pending-order') ? 'active-item':''}}"><a href="{{route('pending-order')}}">New Pending Order</a></li>
                                <li class="{{request()->is('processing-order') ? 'active-item':''}}"><a href="{{route('processing-order')}}">Processing Order</a></li>
                                <li class="{{request()->is('confirmed-order') ? 'active-item':''}}"><a href="{{route('confirmed-order')}}">Confirmed Order</a></li>
                                <li class="{{request()->is('delivered-order') ? 'active-item':''}}"><a href="{{route('delivered-order')}}">Delivered Order</a></li>
                                <li class="{{request()->is('cancel-order') ? 'active-item':''}}"><a href="{{route('cancel-order')}}">Cancel Order</a></li>
                            </ul>
                        </li>
                        <!--Reports-->
                        <li class="has-child-item close-item
                            <?php if(request()->is('daily-report')){
                            echo 'daily-report' ? 'open-item':'';
                            }
                            else if(request()->is('view-daily-report')){
                            echo 'view-daily-report' ? 'active-item':'';
                            }
                            else if(request()->is('monthly-report')){
                            echo 'monthly-report' ? 'open-item':'';
                            }
                            else if(request()->is('view-monthly-report')){
                            echo 'view-monthly-report' ? 'active-item':'';
                            }
                            else if(request()->is('yearly-report')){
                            echo 'yearly-report' ? 'open-item':'';
                            }
                            else if(request()->is('view-yearly-report')){
                            echo 'view-yearly-report' ? 'active-item':'';
                            }
                            else if(request()->is('search-report')){
                            echo 'search-report' ? 'open-item':'';
                            }
                            else if(request()->is('view-search-date')){
                            echo 'view-search-date' ? 'active-item':'';
                            }
                            else if(request()->is('view-search-month')){
                            echo 'view-search-month' ? 'active-item':'';
                            }
                            else if(request()->is('view-search-year')){
                            echo 'view-search-year' ? 'active-item':'';
                            }
                            ?>
                            ">
                            <a><i class="fa fa-align-left" aria-hidden="true"></i><span>Reports</span></a>
                            <ul class="nav child-nav level-1">
                                <li class="{{request()->is('daily-report') ? 'active-item':''}}"><a href="{{route('daily-report')}}">Daily Report</a></li>
                                <li class="{{request()->is('monthly-report') ? 'active-item':''}}"><a href="{{route('monthly-report')}}">Monthly Report</a></li>
                                <li class="{{request()->is('yearly-report') ? 'active-item':''}}"><a href="{{route('yearly-report')}}">Yearly Report</a></li>
                                <li class="{{request()->is('search-report') ? 'active-item':''}}"><a href="{{route('search-report')}}">Search Report</a></li>
                            </ul>
                        </li>
                        <!--User-->
                        <li class="has-child-item close-item
                            <?php if(request()->is('sub-admin')){
                            echo 'sub-admin' ? 'open-item':'';
                            }
                            else if(request()->is('add-sub-admin')){
                            echo 'sub-admin' ? 'active-item':'';
                            }
                            else if(request()->is('edit-sub-admin')){
                            echo 'edit-sub-admin' ? 'active-item':'';
                            }
                            else if(request()->is('view-sub-admin')){
                            echo 'view-sub-admin' ? 'active-item':'';
                            }
                            else if(request()->is('all-customer')){
                            echo 'all-customer' ? 'open-item':'';
                            }
                            else if(request()->is('view-all-customer')){
                            echo 'view-all-customer' ? 'active-item':'';
                            }
                            else if(request()->is('all-merchant')){
                            echo 'all-merchant' ? 'open-item':'';
                            }
                            else if(request()->is('view-all-merchant')){
                            echo 'view-all-merchant' ? 'active-item':'';
                            }
                            else if(request()->is('subscriber-list')){
                            echo 'subscriber-list' ? 'open-item':'';
                            }
                            ?>
                            ">
                            <a><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a>
                            <ul class="nav child-nav level-1">
                                <li class="{{request()->is('sub-admin') ? 'active-item':''}}">
                                    <a href="{{route('sub-admin')}}">Sub Admin</a></li>
                                    <li class="{{request()->is('all-customer') ? 'active-item':''}}"><a href="{{route('all-customer')}}">All Customer</a></li>
                                    <li class="{{request()->is('all-merchant') ? 'active-item':''}}"><a href="{{route('all-merchant')}}">All Merchant</a></li>
                                    <li class="{{request()->is('subscriber-list') ? 'active-item':''}}"><a href="{{route('subscriber-list')}}">Subscriber List</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>