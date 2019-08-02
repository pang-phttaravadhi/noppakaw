@extends('liff-layout')
@section('title')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>แก้ไขโปรไฟล์</strong></div>
    <div class="panal-body">
        <div class="row">
            <div class="col-md-4">
                <label>ชื่อผู้ใช้:</label>
                <textarea class="form-control" rows="2" id="comment"></textarea>
                <label>ที่อยู่:</label>
                <textarea class="form-control" rows="2" id="comment"></textarea>
                <label>เบอร์โทร:</label>
                <textarea class="form-control" rows="2" id="comment"></textarea>
            </div>
        </div> 
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
    <a href="/liff/profile" class="btn btn-info">กลับ</a>
</div>

@endsection