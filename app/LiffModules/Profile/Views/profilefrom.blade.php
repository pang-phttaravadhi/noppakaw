@extends('liff-layout')
@section('title')
@section('content' )

<h4>แก้ไขโปรไฟล์</h4>
<div class="container">
    <div class="row">
        <div class="form-group">
            <label>ชื่อผู้ใช้:</label>
            <textarea class="form-control" rows="2" id="comment"></textarea>
        </div>
        <div class="form-group">
            <label>ที่อยู่:</label>
            <textarea class="form-control" rows="2" id="comment"></textarea>
        </div>
        <div class="form-group">
            <label>เบอร์โทร:</label>
            <textarea class="form-control" rows="2" id="comment"></textarea>
        </div>
    </div>    
    <button type="submit" class="btn btn-primary">บันทึก</button>
    <a href="/liff/profile" class="btn btn-info">กลับ</a>
</div>

@endsection