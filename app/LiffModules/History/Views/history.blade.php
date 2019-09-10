@extends('liff-layout')
@section('title','history')
@section('content' )
<div>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>ประวัติใบสั่งซื้อ</strong></div>
        <div class="panel-body">
            <table style="width:100%">
               
                <tr>
                    <th><strong>เลขใบสั่งซื้อ</strong></th>
                    <th>ว/ด/ปที่โอน</th>
                    <th>จำนวนเงิน</th>
                    <th>สถานะ</th>
                </tr>
                @foreach($payments as $index=> $payment)
                <tr>
                    <td>{{$payment->order_id}}</td>
                    <td>{{$payment->pay_date}}</td>
                    <td>{{$payment->price_net}}</td>
                    <td>{{$payment->status}}</td>
                    
                </tr>
                @endforeach
               
            </table>
            <a href="/liff/historyfrom" style='margin:25px 0;' class="btn btn-wheat btn-block">ใบสั่งซื้อสินค้า</a>
        </div>
    </div>    
</div>

@endsection





