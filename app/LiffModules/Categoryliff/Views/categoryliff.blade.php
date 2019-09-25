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
                <a href='/liff/shoppingcart/{{$product->pro_id}}' class="add-shoppingcart" style='font-size:20px'><i class='fa fa-shopping-cart'></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</form>




@endsection