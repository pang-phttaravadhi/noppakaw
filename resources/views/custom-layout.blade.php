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
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body>
    <nav class="navbar navbar-default nav-bg-color">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img class="mylogo" src="/assets/img/logo/mylogo.jpg.jpg"/>
                </a>
            </div>
            <ul class="nav navbar-nav pull-right" style="margin-top: 11px">
                <li class="nav-menu"><a href="/">หน้าแรก</a></li>
                <li class="nav-menu"><a href="/product">สินค้า</a></li>
                <li class="nav-menu"><a href="/category">หมวดสินค้าสินค้า</a></li>
                <li class="nav-menu"><a href="/bank">ธนาคาร</a></li>
                <li class="nav-menu"><a href="/payment">ใบสั่งซื้อ</a></li>
                <li class="dropdown nav-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-user" aria-hidden="true"></i> {{CurrentUser::user()->first_name}}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="sub-nav-menu"><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
         @yield('content')
    </div>
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/SimpleAjaxUploader.min.js"></script>
<script src="/assets/js/myscript.js"></script>
@stack('scripts')
</body>
</html>