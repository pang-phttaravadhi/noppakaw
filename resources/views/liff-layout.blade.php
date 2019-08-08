<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/liff.css">
    <body>
        <nav style="padding:0 10px;" class="navbar navbar-default navbar-fixed-top nav-bg-color">
            <ul class="nav navbar-nav">
                <li class="dropdown pull-left">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="fa fa-navicon" style="font-size:36px;color:#fff" ></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-menu"><a href="/liff">หน้าแรก</a></li>
                        <li class="sub-nav-menu"><a href="/liff/categoryliff">หมวดสินค้า</a></li>
                        <li class="sub-nav-menu"><a href="/liff/promotion">โปรโมชั่น</a></li>
                        <li class="sub-nav-menu"><a href="/liff/paymentliff">แจ้งชำระเงิน</a></li>
                        <li class="sub-nav-menu"><a href="/liff/history">ประวัติการสั่งซื้อ</a></li>
                        <li class="sub-nav-menu"><a href="/liff/profile">โปรไฟล์</a></li>
                    </ul>
                </li>
                <li class="sub-nav-menu pull-right"><a href="/liff/shoppingcart">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size:36px;color:#fff"></i> <span class="badge">5</span>
                </a></li>
            </ul>
        </nav>
        <div style="padding-top:80px" class="container-fluid">
            @yield('content')
        </div>
        <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
        <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/SimpleAjaxUploader.min.js"></script>
        <script src="/assets/js/myscript.js"></script>
        <script src="/assets/js/line.js?v=5"></script>
        @stack('scripts')
    </body>
</head>
</html>