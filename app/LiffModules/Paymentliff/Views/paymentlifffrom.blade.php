@extends('liff-layout')
@section('title')
@section('content' )

<p>กรุณาป้อนข้อมูล</p>
<form action="/liff/paymentlifffrom/{{isset($payments)?$payments->order_id:''}}" 
  class="form-ajax" method="POST"> 
    <input type="hidden" value="POST" name="_mathods">
      <div class="form-group">
        <label>เลขใบสั่งซื้อ:</label>
        <input type="text" class="form-control" readonly="readonly"  name="order_id" value="{{isset($payments)?$payments->order_id:''}}">
      </div>
      <div class="form-group">
      <label>วัน/เดือน/ปี ที่โอน:</label>
        <input type="date" class="form-control"  name="pay_date">
      </div>
      <div class="form-group">
      <label>ธนาคาร:</label>
          <input name="bank_id" type="radio" class="from-control" value="1">กสิกร
          <input name="bank_id" type="radio" class="from-control" value="2">ไทยพาณิชย์
          <input name="bank_id" type="radio" class="from-control" value="3">กรุงศรี
    </div>
      <div class="form-group">
        <label>จำนวนเงิน:</label>
          <input type="text" class="form-control"  name="price_net" value="{{isset($payments)?$payments->price_net:''}}">
      </div>
      <p>ใส่รูปภาพหลักฐานการโอน</p>
      <div class="row">
        <div class="col-md-4">
          <button type="button" data-callback="uploaded" data-ext="jpg,png,jpeg" class="btn btn-primary upload">อัพโหลดรูปภาพ</button>
          <input type="hidden" name="image" id="image"/>
            <div class="thumbnail">
              <img src="{{ isset($payments)?$payments->image:''}}" id="display-image" alt="Lights" style="width:100%">
            </div>
        </div>
      </div>      
      <button type="submit" class="btn btn-primary">บันทึก</button>
</form> 

@endsection
@push('scripts')
<script>
function uploaded(result,el){
$('#image').val(result.url);
$('#display-image').attr('src',result.url);
}
</script>
@endpush