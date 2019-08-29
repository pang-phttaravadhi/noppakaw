@extends('liff-layout')
@section('title')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>แก้ไขโปรไฟล์</strong></div>
    <div class="panal-body">
        <form action="/liff/profilefrom/{{isset($customers)?$customer->cust_id:''}}" 
        class="form-ajax" method="PUT"> 
            <input type="hidden" value="PUT" name="_mathods">
        </form>
        <div class="row">
            <div class="col-md-4">
                <label>ชื่อผู้ใช้:</label>
                <textarea class="form-control" rows="3" name="cust_name" >
                {{ isset($cutomers) ? $cutomer->cust_name:''}}</textarea>
                <label>ที่อยู่:</label>
                <textarea class="form-control" rows="5" name="address" >
                {{ isset($cutomers) ? $cutomer->address:''}}</textarea>
                <label>เบอร์โทร:</label>
                <textarea class="form-control" rows="3" name="tel" >
                {{ isset($cutomers) ? $cutomer->tel:''}}</textarea>

            </div>
        </div> 
       
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
    <a href="/liff/profile" class="btn btn-info">กลับ</a>
</div>

@endsection