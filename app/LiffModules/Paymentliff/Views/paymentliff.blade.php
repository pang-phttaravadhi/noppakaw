@extends('liff-layout')
@section('title','paymentliff')
@section('content' )

<p>กรุณาป้อนข้อมูล</p>
<div class="form-group">
  <label>เลขใบสั่งซื้อ:</label>
    <input type="text" class="form-control"  name="order_id" value="">
</div>
<div class="form-group">
  <label>วัน/เดือน/ปี ที่โอน:</label>
    <input type="date" class="form-control"  name="created_at " value="">
</div>
<div class="form-group">
  <label>ธนาคาร:</label>
    <input type="text" class="form-control"  name="bank_type" value="">
</div>
<div class="form-group">
  <label>จำนวนเงิน:</label>
    <input type="text" class="form-control"  name="price_net" value="">
</div>
<p>ใส่รูปภาพหลักฐานการโอน</p>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-callback="uploaded" data-ext="jpg,png,jpeg" class="btn btn-primary upload">อัพโหลดรูปภาพ</button>
    <input type="hidden" value="{{ isset($payment) ? $payment->image:''}}" name="image" id="image"/>
      <div class="thumbnail">
        <img src="{{ isset($payment) ? $payment->image:''}}" id="display-image" alt="Lights" style="width:100%">
      </div>
  </div>
</div>      
<button type="submit" class="btn btn-primary">บันทึก</button>




@endsection