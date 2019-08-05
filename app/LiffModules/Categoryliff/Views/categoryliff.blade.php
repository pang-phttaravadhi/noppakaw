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
@foreach($products as $index => $products)
<div class="thumbnail">
    <a href="/liff/product-detail/1">
    <img {{$products->image}} alt="Lights" style="width:100%">
        <div class="caption">
            <p>{{$products->pro_name}}</p>
            <p>{{$products->price}}</p>
            <p>{{$products->weight}}</p>
        </div>
    </a>
    <div class="container">
        <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
    </div>
</div>
@endforeach

<!--<div class="row">
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://www.greatstarsdigital.com/wp-content/uploads/2017/08/%E0%B9%83%E0%B8%9A%E0%B9%80%E0%B8%9F%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%99_%E0%B9%91%E0%B9%97%E0%B9%90%E0%B9%98%E0%B9%92%E0%B9%92_0010.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>ชุดไทยจักรพรรดิ สีเงิน</p>
                    <p>3000 บาท</p>
                    <p>น้ำหนัก 0.9 กรัม</p>
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
            <img src="https://i.pinimg.com/564x/06/0d/19/060d1957a3d78f2b9096c95f3c184ec0.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>ชุดไทยจักรพรรดิ สีชมพู</p>
                    <p>3500 บาท</p>
                    <p>น้ำหนัก 0.9 กรัม</p>
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
            <img src="http://entertain.teenee.com/series/img6/1023314.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>ชุดไทยเรือนต้น สีชมพู</p>
                    <p>2500 บาท</p>
                    <p>น้ำหนัก 0.8 กรัม</p>
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
            <img src="https://media-spiceee.net/uploads/content/image/1210189/large_20481824_108226513187978_6419065731836542976_n.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>ชุดไทยเรือนต้น สีขาว</p>
                    <p>2500 บาท</p>
                    <p>น้ำหนัก 0.8 กรัม</p>
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
</div>-->
@endsection