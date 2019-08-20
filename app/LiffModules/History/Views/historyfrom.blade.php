@extends('liff-layout')
@section('title','ตะกร้าสินค้า')
@section('content' )
<div>
    <h4>รายการใบสั่งซื้อ</h4>
    <div class="panel panel-default">
      <div class="panel-heading text-center"><strong>รายการสินค้า</strong></div>
        <div class="panel-body">
        {!! $product_list_html !!}
        </div>
    </div>
</div>
@endsection