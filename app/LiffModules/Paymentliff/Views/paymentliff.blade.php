@extends('liff-layout')
@section('title','paymentliff')
@section('content' )

<p>กรุณาป้อนข้อมูล</p>

<div class="form-group">
      <label>วัน/เดือน/ปี ที่โอน:</label>
        <input type="date" class="form-control"  name="" value="">
    </div>
    <div class="form-group">
      <label>ธนาคาร:</label>
        <option type="text" class="form-control" name="" value="">
    </div>
    <div class="form-group">
      <label>จำนวนเงิน:</label>
        <input type="text" class="form-control"  name="" value="">
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