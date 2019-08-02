@extends('liff-layout')
@section('title','หมวดสินค้า')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>หมวดสินค้า</strong></div>
    <div class="panel-body">
        <a class="btn btn-info" href="/liff/categorylifffrom1">ชุดไทย</a>
        <a class="btn btn-info" href="/liff/categorylifffrom2">เครื่องประดับ</a>
        <a class="btn btn-info" href="/liff/categorylifffrom3">รองเท้า</a>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://res.weloveshopping.com/912459/w_450,h_450,c_thumb/ed1af5291cb4f9cc0326d7e7db7e5dba/1.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>รองเท้าสนสูงสีดำ</p>
                    <p>2500 บาท</p>
                    <p>น้ำหนัก 0.15 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://cb.lnwfile.com/bisuld.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>รองเท้าสนสูงสีครีม</p>
                    <p>2500 บาท</p>
                    <p>น้ำหนัก 0.15 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://th-test-11.slatic.net/original/ab3f0a87f00654eecbdbb818721a49b0.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>รองเท้าคัชชูหนังแท้</p>
                    <p>500 บาท</p>
                    <p>น้ำหนัก 0.15 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://th-live-01.slatic.net/original/89c72c15d604a4c2cf2b82b702808061.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>รองเท้าสนสูงสีครีม</p>
                    <p>1500 บาท</p>
                    <p>น้ำหนัก 0.15 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
    </ul>
</div>
@endsection