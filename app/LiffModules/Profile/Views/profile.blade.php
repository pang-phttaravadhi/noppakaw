@extends('liff-layout')
@section('title','profile')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>โปรไฟล์</strong></div>
    <div class="row"> 
        <form action="/profile/{{$customer->cust_id}}"  class="form-ajax" call_back='yes' method="POST">
            <input type="hidden"value="POST" name="_methods">
        </form>
        <div class="col-md-4">
            <img src=" {{ isset($customers) ? $customers->image:''}} "alt="Lights" 
            style="width:40%; display:block;margin:10px auto;" >
            <div class="card-body">
                <div class="form-group">
                    <label>ชื่อผู้ใช้</label>
                    <textarea class="form-control" rows="3" name="cust_name" >
                    {{ isset($customers) ? $customer->cust_name:''}}</textarea>
                </div>
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <textarea class="form-control" rows="5" name="address" >
                    {{ isset($customers) ? $customers->address:''}}</textarea>
                </div>
                <div class="form-group">
                    <label>เบอร์โทร</label>
                    <textarea class="form-control" rows="3" name="tel" >
                    {{ isset($customers) ? $customers->tel:''}}</textarea>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a class="btn btn-info" href="/liff/profilefrom">แก้ไขโปรไฟล์</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection