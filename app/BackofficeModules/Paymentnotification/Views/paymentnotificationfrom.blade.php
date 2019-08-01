@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/paymentnotification"กลับ></a>
    <div class="panel-heading" style="font-size:20px;">
    </div>
   
      <form action=""  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
       
    
      <form class="form-ajax" action="" method="POST">
    
    
    <div class="form-group">
      <label>ใบสั่งซื้อ:</label>
        <input type="text" class="form-control"  name="" value="">
    </div>
    <div class="form-group">
      <label>ชื่อลูกค้า:</label>
        <input type="text" class="form-control"  name="" value="">
    </div>
    <div class="form-group">
      <label>จำนวนเงิน:</label>
        <input type="text" class="form-control"  name="" value="">
    </div>
    <div class="form-group">
      <label>หลักฐานการโอน:</label>
        <input type="text" class="form-control"  name="" value="">
    </div>
    <div class="form-group">
      <label>การอนุมัติสถานะ:</label>
      <select name="">
        <option value="">
          กรุณาเลือกสถานะ
          </option>
         
      </select>
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
      <a href="/paymentnotification" class="btn btn-info">กลับ</a>
       
  </form>
</div>

@endsection
       
