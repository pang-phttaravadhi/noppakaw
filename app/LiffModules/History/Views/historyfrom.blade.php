@extends('liff-layout')
@section('title')
@section('content' )
<label>กรุณาป้อนความคิดเห็นด้วยค่ะ</label>
    <div class="form-group">
        <label>ความคิดเห็น:</label>
        <textarea class="form-control" rows="2" id="comment"></textarea>
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
    <a href="/liff/history" class="btn btn-info">กลับ</a>
        
@endsection
