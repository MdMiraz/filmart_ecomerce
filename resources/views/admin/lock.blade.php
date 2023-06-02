
<!doctype html>
<html lang="en" class="fixed accounts lock-screen">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Mr. Shopper</title>
        <link rel="apple-touch-icon" sizes="120x120" href="{{'assets/admin/'}}favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{'assets/admin/'}}favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{'assets/admin/'}}favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{'assets/admin/'}}favicon/favicon-16x16.png">
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{'assets/admin/'}}vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{'assets/admin/'}}vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{'assets/admin/'}}vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{'assets/admin/'}}stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <div class="avatar">
                <img alt="User photo" src="{{'assets/admin/'}}images/avatar/avatar_user.jpg" />
            </div>
        </div>
        <div class="box animated fadeInUp">
            <!--UNLOCK FORM-->
            <div class="panel">
                <div class="panel-content bg-scale-0">
                    <form method="post" action="">
                    @csrf
                        <h3 class="text-center mb-md">Jane Doe</h3>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <a href="{{route('dashboard')}}" class="btn btn-primary btn-block ">Unlock</a>
                        </div>
                        <div class="form-group text-center">
                            <a href="{{route('sign-in')}}">Not Jane Doe?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="{{'assets/admin/'}}vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="{{'assets/admin/'}}vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{'assets/admin/'}}vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="{{'assets/admin/'}}javascripts/template-script.min.js"></script>
<script src="{{'assets/admin/'}}javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>


</html>