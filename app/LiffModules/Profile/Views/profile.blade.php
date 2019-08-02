@extends('liff-layout')
@section('title','profile')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>โปรไฟล์</strong></div>
    <div class="row">
        <div class="col-md-4">
            <img src="https://www.greatstarsdigital.com/wp-content/uploads/2017/08/%E0%B9%83%E0%B8%9A%E0%B9%80%E0%B8%9F%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%99_%E0%B9%91%E0%B9%97%E0%B9%90%E0%B9%98%E0%B9%92%E0%B9%92_0010.jpg" alt="Lights" style="width:40%; display:block;margin:10px auto;" >
            <div class="card-body">
                <div class="form-group">
                    <label>ชื่อผู้ใช้</label>
                    <textarea class="form-control" rows="2" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <textarea class="form-control" rows="2" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label>เบอร์โทร</label>
                    <textarea class="form-control" rows="2" id="comment"></textarea>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a class="btn btn-info" href="/liff/profilefrom">แก้ไขโปรไฟล์</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection