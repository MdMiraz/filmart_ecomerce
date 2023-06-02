<div class="row animated fadeInUp">
    <div class="col-sm-12 col-lg-9">
        <h4 class="section-subtitle"><b>Current Month Order Info</b></h4>
        <div class="row">
            <!--LINE CHART-->
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-content">
                        <canvas id="line-chart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!--WIDGET BOX STYLE 1-->
        <h4 class="section-subtitle"><b>Total Info</b></h4>
        <div class="row">
            <!--BOX Style 1-->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="panel widgetbox wbox-1 bg-darker-1 color-light">
                    <a href="{{route('all-brand')}}">
                        <div class="panel-content">
                            <h1 class="title color-w"> <i class="fa fa-cubes"></i> 124 </h1>
                            <h4 class="subtitle">Total Brand</h4>
                        </div>
                    </a>
                </div>
            </div>
            <!--BOX Style 1-->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="panel widgetbox wbox-1 bg-darker-2 color-light">
                    <a href="{{route('all-product')}}">
                        <div class="panel-content">
                            <h1 class="title color-light-1"> <i class="fa fa-table"></i> 124 </h1>
                            <h4 class="subtitle">Total Products</h4>
                        </div>
                    </a>
                </div>
            </div>
            <!--BOX Style 1-->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                    <a href="{{route('all-merchant')}}">
                        <div class="panel-content">
                            <h1 class="title color-darker-2"> <i class="fa fa-users"></i> 105 </h1>
                            <h4 class="subtitle color-darker-1">Total Merchant</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <h4 class="section-subtitle"><b>Order Info</b></h4>
        <div class="row">
            <!--BOX Style 3-->
            <div class="col-sm-4 col-lg-2">
                <div class="panel widgetbox wbox-3 bg-danger">
                    <a href="{{route('pending-order')}}">
                        <div class="panel-content">
                            <span class="icon fa fa-warning"></span>
                            <h1 class="title">56</h1>
                            <h4 class="subtitle">New Pending Order</h4>
                        </div>
                    </a>
                </div>
            </div>
            <!--BOX Style 3-->
            <div class="col-sm-4 col-lg-2">
                <div class="panel widgetbox wbox-3 bg-warning">
                    <a href="{{route('processing-order')}}">
                        <div class="panel-content">
                            <span class="icon fa fa-flag "></span>
                            <h1 class="title">56</h1>
                            <h4 class="subtitle">Processing Order</h4>
                        </div>
                    </a>
                </div>
            </div>
            <!--BOX Style 3-->
            <div class="col-sm-4 col-lg-2">
                <div class="panel widgetbox wbox-3 bg-success">
                    <a href="{{route('delivered-order')}}">
                        <div class="panel-content">
                            <span class="icon fa fa-check"></span>
                            <h1 class="title">24</h1>
                            <h4 class="subtitle">Delivered Order</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>