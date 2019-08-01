@extends('liff-layout')
@section('title','profile')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" ><center>
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>   
            </div>  
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