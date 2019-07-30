@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/payment"กลับ></a>
    <div class="panel-heading" style="font-size:20px;">
    </div>
    @if(isset($payment))
      <form action="/payment/{{$orders->order_id}}"  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
        @csrf()
    @else
      <form class="form-ajax" action="/payment" method="POST">
    @csrf()
    @endif
    <div class="form-group">
      <label>เลขใบสั่งซื้อ:</label>
        <input type="text" class="form-control"  name="detail_id" value="{{ isset($payment) ? $payment->detail_id:''}}">
    </div>
    <div class="form-group">
      <label>รายการสินค้า:</label>
        <input type="text" class="form-control"  name="pro_name" value="{{ isset($payment) ? $payment->pro_name:''}}">
    </div>
    <div class="form-group">
      <label>ชื่อลูกค้า:</label>
        <input type="text" class="form-control"  name="cust_name" value="{{ isset($payment) ? $payment->cust_name:''}}">
    </div>
    <div class="form-group">
      <label>ที่อยู่ในการจัดส่ง:</label>
        <input type="text" class="form-control"  name="address" value="{{ isset($payment) ? $payment->address:''}}">
    </div>
    <div class="form-group">
      <label>ราคาสินค้าต่อหน่วย:</label>
        <input type="text" class="form-control"  name="price_per_unit" value="{{ isset($payment) ? $payment->price_per_unit:''}}">
    </div>
    <div class="form-group">
      <label>ราคาสินค้า:</label>
        <input type="text" class="form-control"  name="price" value="{{ isset($payment) ? $payment->price:''}}">
    </div>
    <div class="form-group">
      <label>ค่าจัดส่ง:</label>
        <input type="text" class="form-control"  name="transport_price" value="{{ isset($payment) ? $payment->transport_price:''}}">
    </div>
    <div class="form-group">
      <label>ยอดสุทธิ:</label>
        <input type="text" class="form-control"  name="price_net" value="{{ isset($payment) ? $payment->price_net:''}}">
    </div>
    <div class="form-group">
      <label>ราคารวม:</label>
        <input type="text" class="form-control"  name="amount" value="{{ isset($payment) ? $payment->amount:''}}">
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
      <a href="/payment" class="btn btn-info">กลับ</a>
  </form>
</div>


       
@endsection
@push('scripts')
<script>
function uploaded(result,el){
$('#image').val(result.url);
$('#display-image').attr('src',result.url);
}
</script>
@endpush