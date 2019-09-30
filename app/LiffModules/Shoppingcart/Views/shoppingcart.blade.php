@extends('liff-layout')
@section('title','ตะกร้าสินค้า')
@section('content' )
<div>
    <h4>รายการใบสั่งซื้อ</h4>
    <div class="panel panel-default">
      <div class="panel-heading text-center"><strong>รายการสินค้า</strong></div>
      <div class="panel-body">
          {!! $product_list_html !!}
       <a href="/liff/shoppingcart-shipping/{{$customer->cust_id}}" style='margin:25px 0;' class="btn btn-primary btn-block">ป้อนที่อยู่ในการจัดส่งสินค้า</a>
      </div>
  </div>
</div>


@endsection