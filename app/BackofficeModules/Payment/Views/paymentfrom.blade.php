@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/payment"กลับ></a>
    <div class="panel-heading" style="font-size:20px;">
    </div>
    @if(isset($payment))
      <form action="/payment/{{$payment->pay_id}}"  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
        @csrf()
    @else
      <form class="form-ajax" action="/payment" method="POST">
    @csrf()
    @endif
    <div class="form-group">
      <label>เลขใบสั่งซื้อ:</label>
        <input type="text" class="form-control"  name="order_id" value="{{ isset($payment) ? $payment->order_id:''}}">
    </div>
    <div class="form-group">
      <label>เลขบัญชีลูกค้า:</label>
        <input type="text" class="form-control"  name="bank_account" value="{{ isset($payment) ? $payment->bank_account:''}}">
    </div>
    <div class="form-group">
      <label>ราคาสินค้า:</label>
        <input type="text" class="form-control"  name="price" value="{{ isset($payment) ? $payment->price:''}}">
    </div>
    <div class="form-group">
      <label>สถานะการอนุมัติ:</label>
        <input type="text" class="form-control"  name="	approved_status" value="{{ isset($payment) ? $payment->	approved_status:''}}">
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