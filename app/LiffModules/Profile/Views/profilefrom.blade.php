@extends('liff-layout')
@section('title')
@section('content' )

<h4>แก้ไขโปรไฟล์</h4>
        <p>เลือกรูปภาพ</p>
        <div class="row">
            <div class="col-md-4">
                <button type="button" data-callback="uploaded" data-ext="jpg,png,jpeg" class="btn btn-primary upload">อัพโหลดรูปภาพ</button>
                    <input type="hidden" value="{{ isset($payment) ? $payment->image:''}}" name="image" id="image"/>
                        <div class="thumbnail">
                             <img src="{{ isset($payment) ? $payment->image:''}}" id="display-image" alt="Lights" style="width:100%">
                        </div>
            </div>
            <div class="form-group">
                <label>ชื่อผู้ใช้:</label>
                <input type="text" class="form-control"  name="" value="">
            </div>
            <div class="form-group">
                <label>ที่อยู่:</label>
                <input type="text" class="form-control"  name="" value="">
            </div>
            <div class="form-group">
                <label>เบอร์โทร:</label>
                <input type="text" class="form-control"  name="" value="">
            </div>
        </div>    
        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a href="/liff/profile" class="btn btn-info">กลับ</a>


@endsection