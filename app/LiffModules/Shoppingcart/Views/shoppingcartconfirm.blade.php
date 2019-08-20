@extends('liff-layout')
@section('title')
@section('content' )
<div>
    <h4>รายการใบสั่งซื้อ</h4>
    <div class="panel panel-default">
      <div class="panel-heading text-center"><strong>รายการสินค้า</strong></div>
        <div class="panel-body">
        {!! $product_list_html !!}
        </div>
    </div>
  {!! $shipping_html  !!}
  <form action="/liff/shoppingcart-confirm" class="form-ajax" method="post">
  <button type="submit" class="btn btn-primary btn-block"> ยืนยันการสั่งซื้อ </button>
  </form>
</div>
@endsection
