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
                    <th>รายละเอียด</th>
                </tr>
                @foreach($payments as $index=> $payment)
                <tr>
                    <td>{{$payment->order_id}}</td>
                    <td>{{$payment->pay_date}}</td>
                    <td>{{$payment->price_net}}</td>
                    <td>{{$payment->status}}</td>
                    <td><a href="/liff/historyfrom/{{$payment->order_id}}" class="btn btn-primary" role="button">รายละเอียด</a></td> 
                </tr>
                @endforeach
            </table>
        </div>
    </div>    
</div>

@endsection





