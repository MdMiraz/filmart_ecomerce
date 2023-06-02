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
                        <div class="col-xs-6"><h4>Customer Info</h4></div>
                    </div><hr>
                    <div class="p-info">
                        <div class="panel-group faq-accordion">
                            <div class="panel panel-accordion">
                                <div class="row">
                                    <div class="col-xs-9" style="padding: 0px !important;padding-left: 15px !important;
                                        ">
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Customer Name:</span>{{$customers['customer_name']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Email:</span> {{$customers['email']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Mobile No:</span> {{$customers['mobile_no']}}</p>
                                        </div>
                                        <div class="panel-header bg-scale-0" style="background: white !important;">
                                            <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Joining Date:</span>
                                            <!-- for date formate -->
                                            @php ($date = $customers['created_at'])
                                        {{ $date = date('d/m/y')}}</p>
                                    </div>
                                </div>
                                <div class="col-xs-3" style="padding: 0px !important;">
                                    <div class="profile-photo gallery">
                                   <a href="{{URL::to($customers['image'])}}" title="Image"><img alt="User photo" src="{{URL::to($customers['image'])}}" style="height: 152px !important; width: 167px !important;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-header bg-scale-0">
                                <p class="panel-title"><span class="color-primary text-bold" style="display:inline;">Status:</span>
                                @if($customers['status']==1)
                                <span style="color: green;display:inline;">Active</span>
                                @else
                                <span style="color: red;display:inline;">Banned</span>
                                @endif
                            </p>
                        </div>
                        <div class="panel-header bg-scale-0"  style="background: white !important;">
                            <p class="panel-title"><span class="color-primary text-bold">Contact Address:</span><br> {{$customers['contact_address']}}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>