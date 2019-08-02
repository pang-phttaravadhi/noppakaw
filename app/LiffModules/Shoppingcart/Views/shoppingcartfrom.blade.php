@extends('liff-layout')
@section('title')
@section('content')
<div>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>ที่อยู่ในการจัดส่ง</strong></div>
        <div class="panel-body">
            <table style="width:100%">
                <label>ชื่อ</label>
                <input type="text" class="form-control"  name="" value="">
                <label>ที่อยู่ในการจัดส่ง</label>
                <input type="text" class="form-control"  name="" value="">
                <label>เบอร์โทร</label>
                <input type="text" class="form-control"  name="" value="">
                <a href="/liff/shoppingcartfromm" style='margin:25px 0;' class="btn btn-primary btn-block">ยืนยัน</a>
            </table>
        </div>
    </div>
</div>
@endsection
