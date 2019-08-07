@extends('liff-layout')
@section('title','หมวดสินค้า')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>หมวดสินค้า</strong></div>
    <div class="panel-body" style="display:flex; justify-content: center;">
    <a class="btn btn-info" style="margin:auto" href="/liff/categoryliff">ทั้งหมด</a>
    @foreach($category as $index => $cate)
        <a class="btn btn-info" style="margin:auto" href="/liff/categoryliff?cate_id={{$cate->cate_id}}">{{$cate->cate_name}}</a>
    @endforeach
    </div>
</div>
<form action="/liff/shoppingcart">
<div class="row">
    @foreach($products as $index => $product)
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/{{$product->pro_id}}">
            <img src="{{$product->image}}" alt="Lights" style="width:100%">
                <div class="caption">
                <p style="white-space: nowrap; overflow:hidden; text-overflow:ellipsis">{{$product->pro_name}}</p>
                <p>ราคา <b>{{$product->price}}</b> บาท</p>
                <p>น้ำหนัก <b>{{$product->weight}}</b> กรัม</p>
                </div>
            </a>
            <div class="container">
                <a href='/liff/product-detail/{{$product->pro_id}}' class="add-shoppingcart" style='font-size:14px'><i class='fa fa-shopping-cart'></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</form>



<!--<div class="row">
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="xxxx" alt="Lights" style="width:100%">
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