<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/liff.css">
    <body>
    <nav class="navbar navbar-default nav-bg-color">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
            
                <!-- <img class="mylogo" src="/assets/img/logo/mylogo.jpg.jpg"/> -->
            </a>
        </div>
        <li class="dropdown nav-menu "> 
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-navicon" style="font-size:36px" ></i>  
                <i class="fa fa-cart-arrow-down pull-right" aria-hidden="true" style="font-size:36px"></i> 
            </a>
            <ul class="dropdown-menu">
                <li class="sub-nav-menu"><a href="/liff/categoryliff">หมวดสินค้า</a></li>
                <li class="sub-nav-menu"><a href="/liff/paymentliff">แจ้งชำระเงิน</a></li>
                <li class="sub-nav-menu"><a href="/liff/history">History</a></li>
            </ul>
            
            <div class="container-fluid">
                    @yield('content')
            </div>
        </li>
       <!-- <i class="fa fa-cart-arrow-down pull-right" aria-hidden="true" style="font-size:36px"></i> -->
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/SimpleAjaxUploader.min.js"></script>
<script src="/assets/js/myscript.js"></script>
@stack('scripts')
</body>
</head>
</html>