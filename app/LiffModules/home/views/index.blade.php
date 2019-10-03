@extends('liff-layout')
@section('content' )
<img src="/assets/img/logo/logo3.png"  style="width:350px; height:200px;"> 
<h4>รายการสินค้าแนะนำ</h4>
<div class="row">
    @foreach($products as $index => $product)
        <div class="col-md-4 col-xs-6">
            <div class="thumbnail w3-card">
                <a href="/liff/product-detail/{{$product->pro_id}}">
                <img src="{{$product->image}}" alt="Lights" style="width:100%">
                    <div class="caption">
                    <p style="white-space: nowrap; overflow:hidden; text-overflow:ellipsis">{{$product->pro_name}}</p>
                    <p style="color:blue">ราคา <b>{{$product->price}}</b> THB</p>
                    <p>น้ำหนัก <b>{{$product->weight}}</b> (g.)</p>
                    </div>
                </a>
                <div class="container">
                <a href='/liff/shoppingcart/{{$product->pro_id}}' class="add-shoppingcart" style='font-size:20px'><i class='fa fa-shopping-cart'></i></a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection