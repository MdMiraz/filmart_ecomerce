<link rel="stylesheet" href="{{URL::to('assets/admin/vendor/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/admin/vendor/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/admin/stylesheets/css/style.css')}}">
<div class="row animated fadeInRight">
    <!--COLUMNS HIDDEN RESPONSIVE-->
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-xs-6"><h4>Product Info</h4></div>
                    <div class="col-xs-6 text-right">
                    </div>
                </div><hr>
                <div class="p-info">
                    <div class="panel-group faq-accordion">
                        <div class="panel panel-accordion">
                            <div class="row">
                                <div class="col-xs-10" style="padding: 0px !important;padding-left: 15px !important;
                                    ">
                                    <div class="panel-header bg-scale-0">
                                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Name:</span> {{ucwords($product['product_name'])}}</p>
                                    </div>
                                    <div class="panel-header bg-scale-0" style="background: white !important;">
                                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Brand Name:</span>
                                    </p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Category Name:</span> {{ucwords($product['product_name'])}}</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Sub Category Name:</span> {{ucwords($product['product_name'])}}</p>
                                </div>
                            </div>
                            <div class="col-xs-2" style="padding: 0px !important;">
                                <div class="profile-photo">
                                    <img alt="product image" src="{{URL::to($product['image1'])}}" style="height: 114px !important; width: 110px !important;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-10" style="padding: 0px !important;padding-left: 15px !important;
                                ">
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Sub Sub Category Name:</span> {{ucwords($product['product_name'])}}</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Price:</span> {{$product['product_price']}} tk.</p>
                                </div>
                                <div class="panel-header bg-scale-0">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Size:</span> {{ucfirst($product['product_size'])}}</p>
                                </div>
                                <div class="panel-header bg-scale-0" style="background: white !important;">
                                    <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Product Color:</span> {{ucwords($product['product_color'])}}</p>
                                </div>
                            </div>
                            <div class="col-xs-2" style="padding: 0px !important;">
                                <div class="profile-photo">
                                    <img alt="product image"  style="height: 114px !important; width: 110px !important;" src="{{URL::to($product['image2'])}} ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10" style="padding: 0px !important;padding-left: 15px !important;
                            ">
                            <div class="panel-header bg-scale-0">
                                <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Stock Quantity:</span> {{$product['stock_quantity']}}</p>
                            </div>
                            <div class="panel-header bg-scale-0" style="background: white !important;">
                                <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold">Product Short Description:</span><br> {{ucfirst($product['product_short_description'])}}</p>
                            </div>
                        </div>
                        <div class="col-xs-2" style="padding: 0px !important;">
                            <div class="profile-photo">
                                <img alt="product image" src="{{URL::to($product['image3'])}}" style="height: 114px !important; width: 110px !important;">
                            </div>
                        </div>
                    </div>
                    <div class="panel-header bg-scale-0">
                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold">Product Long Description:</span><br> {{ucfirst($product['product_long_description'])}}</p>
                    </div>
                    <div class="panel-header bg-scale-0" style="background: white !important;">
                        <p class="panel-title" style="font-weight: normal !important;font-size: 1rem !important;"><span class="color-primary text-bold" style="display:inline;">Uploaded Date & Time:</span> {{$product['created_at']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>