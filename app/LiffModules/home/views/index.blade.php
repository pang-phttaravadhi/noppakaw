@extends('liff-layout')
@section('content' )
<img src="/assets/img/logo/2.jpg"  width="385" height="190"> 
<h4>รายการสินค้าแนะนำ</h4>
<div class="row">
    @foreach($products as $index => $product)
        <div class="col-md-4 col-xs-6">
            <div class="thumbnail">
                <a href="/liff/product-detail/{{$product->pro_id}}">
                <img src="{{$product->image}}" alt="Lights" style="width:100%">
                    <div class="caption">
                    <p style="white-space: nowrap; overflow:hidden; text-overflow:ellipsis">{{$product->pro_name}}</p>
                    <p style="color:blue">ราคา <b>{{$product->price}}</b> บาท</p>
                    <p>น้ำหนัก <b>{{$product->weight}}</b> กรัม</p>
                    </div>
                </a>
                <div class="container">
                <a href='/liff/shoppingcart/{{$product->pro_id}}' class="add-shoppingcart" style='font-size:14px'><i class='fa fa-shopping-cart'></i></a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection