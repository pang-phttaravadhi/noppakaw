@extends('liff-layout')
@section('title')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>แก้ไขโปรไฟล์</strong></div>
    <div class="panal-body">
        <form action="/liff/profilefrom/{{$customer->cust_id}}" 
        class="form-ajax" method="PUT"> 
            <input type="hidden" value="PUT" name="_mathods">
        <div class="row" style="background-color:#FFDAB9;">
            <div class="col-md-4">
                <img src=" {{$customer->image}} "alt="Lights" 
                style="width:40%; display:block;margin:10px auto;" >
                <label>ชื่อผู้ใช้:</label>
                <textarea class="form-control" rows="3" name="cust_name" >
                {{$customer->cust_name}}</textarea>
                <label>ที่อยู่:</label>
                <textarea class="form-control" rows="5" name="address" >
                {{$customer->address}}</textarea>
                <label>เบอร์โทร:</label>
                <textarea class="form-control" rows="3" name="tel" >
                {{$customer->tel}}</textarea>
            </div>      
        </div>
        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a href="/liff/profile" class="btn btn-info">กลับ</a>
        </form>
    </div> 
</div>

@endsection