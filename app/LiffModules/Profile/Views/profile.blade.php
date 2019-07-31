@extends('liff-layout')
@section('title','profile')
@section('content' )

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="125%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                        <title>Placeholder</title><rect width="80%" height="80%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                    <div class="form-group">
                            <label>ชื่อผู้ใช้</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <div class="form-group">
                            <label>ที่อยู่</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <div class="form-group">
                            <label>เบอร์โทร</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-info" href="/liff/profilefrom">แก้ไขโปรไฟล์</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    



@endsection