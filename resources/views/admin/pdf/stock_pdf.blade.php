<link rel="stylesheet" href="{{URL::to('assets/admin/vendor/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/admin/vendor/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/admin/stylesheets/css/style.css')}}">


<!--body part start-->

<div class="row animated fadeInRight">
        <!--COLUMNS HIDDEN RESPONSIVE-->
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6"><h4>Stock Info</h4></div>
                    </div><hr>
                    <div class="p-info">
                        <div class="panel-group faq-accordion">
                            <div class="panel panel-accordion">
                                <div class="row">
                                    <div class="col-xs-9" style="padding: 0px !important;padding-left: 15px !important;
                                        ">
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Id:</span> {{$stock['id']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Name:</span> {{ucwords($stock['product_name'])}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Price:</span> {{$stock['product_price']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Stock Quantity:</span> {{$stock['stock_quantity']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Stock Status:</span> 
                                            @if($stock['stock_quantity']>=5)
                                            <span style="color: green;display:inline;">Available</span>
                                            @elseif($stock['stock_quantity']>=1)
                                            <span style="color: #f0ad4e;display:inline;">Shortage</span>
                                            @else
                                            <span style="color: red;display:inline;">Unavailable</span>
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3" style="padding: 0px !important;">
                                        <div class="profile-photo gallery">
                                        <a href="{{URL::to($stock['image1'])}}" title="Image 1"><img alt="product image" src="{{URL::to($stock['image1'])}}" style="height: 190px !important; width: 168px !important;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Size:</span> {{$stock['product_size']}}</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Product Color:</span> {{$stock['product_color']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>