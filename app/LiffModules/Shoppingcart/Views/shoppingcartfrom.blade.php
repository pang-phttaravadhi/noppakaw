@extends('liff-layout')
@section('title')
@section('content')
<div>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>ที่อยู่ในการจัดส่ง</strong></div>
        <div class="panel-body">
            <table style="width:100%">
            @if(isset($customer))
            @else
            ป้อนที่อยู่ในการจัดส่งสินค้า
            @endif
            @if(isset($category))
            <form actioon="/shoppingcart/{{$customer->cust_id}}" class="form-ajax" method="PUT">
                        <input type="hidden" value="put" name="_mathods">
                    @csrf()
                @else
                <form class="form-ajax" action="/shoppingcart" method="POST">
                @csrf()
                @endif
                <div class="form-group">
                    <label>ชื่อ:</label>
                    <input type="text" class="form-control"  name="cust_name" value="{{ isset($customer) ? $customer->cust_name:''}}">
                </div>
                <div class="form-group">
                    <label>ที่อยู่ในการจัดส่ง:</label>
                    <input type="text" class="form-control"  name="address" value="{{ isset($customer) ? $customer->address:''}}">
                </div>
                <div class="form-group">
                    <label>เบอร์โทร:</label>
                    <input type="text" class="form-control"  name="tel" value="{{ isset($customer) ? $customer->tel:''}}">
                </div>
                <a href="/liff/shoppingcartfromm" style='margin:25px 0;' class="btn btn-primary btn-block">ยืนยัน</a>
            </table>
        </div>
    </div>
</div>
@endsection
