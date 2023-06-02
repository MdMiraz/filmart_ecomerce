<link rel="stylesheet" href="{{URL::to('assets/admin/vendor/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/admin/vendor/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/admin/stylesheets/css/style.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/admin/vendor/data-table/media/css/dataTables.bootstrap.min.css')}}">


<!--body part start-->
<div class="row animated fadeInRight">
        <!--COLUMNS HIDDEN RESPONSIVE-->
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6"><h4>All Subscriber List</h4></div>
                    </div>
                    <h6 class="mb-xlg text-center"><b>Total Active Subscriber - <span class="color-primary text-bold">                        
                        <!--Active Subscriber counting -->
                        <?php
                        $connection = mysqli_connect("localhost","root","","mrshopper");
                        $query = "SELECT status FROM subscribers Where status=1";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row; ?>              
                    </span></b></h6><hr>
                    <table class="table table-striped table-hover responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>E-mail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($subscribers as $subscriber)
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{$subscriber->email}}</td>
                                <td>
                                    @if($subscriber->status==1)
                                    <span style="color: green;">Active</span>
                                    @else
                                    <span style="color: red;">Banned</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        @php($i++)
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>