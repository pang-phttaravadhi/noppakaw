@extends('liff-layout')
@section('title')
@section('content' )

<p>กรุณาป้อนข้อมูล</p>
<form action="/liff/paymentlifffrom/{{isset($payments)?$customer->cust_id:''}}" 
        class="form-ajax" method="POST"> 
            <input type="hidden" value="post" name="_mathods">
</form>
<div class="form-group">
  <label>เลขใบสั่งซื้อ:</label>
    <input type="text" class="form-control"  name="order_id" value="{{isset($payments)?$payments->order_id:''}}">
</div>
<div class="form-group">
  <label>วัน/เดือน/ปี ที่โอน:</label>
    <input type="date" class="form-control"  name="created_at " value="{{isset($payments)?$payments->created_at:''}}">
</div>
<div class="form-group">
  <label>ธนาคาร:</label>
    <input type="text" class="form-control"  name="bank_type" value="{{isset($payments)?$payments->bank_type:''}}">
</div>
<div class="form-group">
  <label>จำนวนเงิน:</label>
    <input type="text" class="form-control"  name="price_net" value="{{isset($payments)?$payments->price_net:''}}">
</div>
<p>ใส่รูปภาพหลักฐานการโอน</p>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-callback="uploaded" data-ext="jpg,png,jpeg" class="btn btn-primary upload">อัพโหลดรูปภาพ</button>
    <input type="hidden" value="{{ isset($payments)?$payments->image:''}}" name="image" id="image"/>
      <div class="thumbnail">
        <img src="{{ isset($payments)?$payments->image:''}}" id="display-image" alt="Lights" style="width:100%">
      </div>
  </div>
</div>      
<button type="submit" class="btn btn-primary">บันทึก</button>

@endsection