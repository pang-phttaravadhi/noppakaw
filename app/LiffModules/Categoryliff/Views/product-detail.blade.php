@extends('liff-layout')
@section('content' )
<h4>{{$product->pro_name}}</h4>
<div class="row">
    <div class="col-md-12">
        <div class="thumbnail">
        <img src="{{$product->image}}" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>{{$product->pro_name}}</p>
                    <p>{!! nl2br($product->detail) !!}</p>
                    <p>{{$product->price}}บาท</p>
                    <p>{{$product->weight}}กรัม</p>
                </div>
            <div class="container">
                <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
                <a href="/liff/categoryliff" class="btn btn-info">กลับ</a>
                <a href="/liff/" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
        </div>
    </div>
</div>
@endsection