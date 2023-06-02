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
                <li><a href="javascript:avoid(0)">Orders</a></li>
                <li><a href="javascript:avoid(0)">Search Report</a></li>
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
                    <div class="col-xs-6"><h4>Search Report Form</h4></div>
                    <div class="col-md-12">
                        <h6 class="mb-xlg text-center"><b>Must be fill all fields and Search!</b></h6><hr>
                        <div class="row">
                            <div class="col-md-4">
                                <form method="post" action="{{route('view-search-date')}}" class="form-horizontal form-stripe" style="border: 1px solid #cecece;padding: 8px;">
                                    @csrf
                                    <h6 class="mb-xlg text-center btn-warning" style="padding: 10px;"><b>Search by Date</b></h6>
                                    <!--DEFAULT datepicker-->
                                    <div class="form-group" style="border-bottom: none;">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon x-default"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" id="default-datepicker" placeholder="Select Date" data-date-format="dd/mm/yyyy" class="form-control datepick" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9" style="padding-bottom: 8px;">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form id="inline-validation" method="post" action="{{route('view-search-month')}}" class="form-horizontal form-stripe" style="border: 1px solid #cecece;padding: 8px;">
                                    @csrf
                                    <h6 class="mb-xlg text-center btn-warning" style="padding: 10px;"><b>Search by Month</b></h6>
                                    <div class="form-group" style="border-bottom: none;">
                                        <div class="col-sm-12">
                                            <select name="month" class="form-control" style="width: 100%" required="required">
                                                <option value="Select Month">Select Month</option>
                                                <option value="January" required>January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="Septembar">Septembar</option>
                                                <option value="Octobar">Octobar</option>
                                                <option value="Novembar">Novembar</option>
                                                <option value="Decembar">Decembar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="border-bottom: none;">
                                        <div class="col-sm-12">
                                            <select name="year" class="form-control" style="width: 100%" required>
                                                <option value="Select Year" required>Select Year</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9" style="padding-bottom: 8px;">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form id="inline-validation" method="post" action="{{route('view-search-year')}}" class="form-horizontal form-stripe" style="border: 1px solid #cecece;padding: 8px;">
                                    @csrf
                                    <h6 class="mb-xlg text-center btn-warning" style="padding: 10px;"><b>Search by Year</b></h6>
                                    <div class="form-group" style="border-bottom: none;">
                                        <div class="col-sm-12">
                                            <select name="year" id="select2-example-basic" class="form-control" style="width: 100%" required>
                                                <option value="Select Year" required>Select Year</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9" style="padding-bottom: 8px;">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
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