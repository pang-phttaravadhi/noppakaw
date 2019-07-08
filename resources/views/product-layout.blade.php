<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body>
    <nav class="navbar navbar-default nav-bg-color">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img class="mylogo" src="/assets/img/logo/mylogo.jpg.jpg"/>
                </a>
            </div>
            <ul class="nav navbar-nav pull-right" style="margin-top: 11px">
                <li class="nav-menu"><a href="/">หน้าแรก</a></li>
                <li class="nav-menu"><a href="/Product">สินค้า</a></li>
                <li class="nav-menu"><a href="#">ชำระเงิน</a></li>
                <li class="nav-menu"><a href="#">การแจ้งชำระเงิน</a></li>
                <li class="nav-menu"><a href="#">ติดตามสินค้า</a></li>
                <li class="nav-menu"><a href="/Test">ติดต่อเรา</a></li>

                <li class="dropdown nav-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-user" aria-hidden="true"> ภัทรพร ทองเทิ่ง</i><span class="caret"></span>
                    </a>
                </li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
         @yield('content')
         <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div>
  </div>
    </div>
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>