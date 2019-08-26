@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/payment">
                        <div class="form-group">
                            <label>ใบสั่งซื้อ</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-info">ค้นหา</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">ใบสั่งซื้อ</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อสินค้า</th>
                                <th>ชื่อลูกค้า</th>
                                <th>ที่อยู่ในการจัดส่ง</th>
                                <th>จำนวนทั้งหมด</th>
                                <th>ราคารวม</th>
                                <th>ส่วนลด</th>
                                <th>ค่าขนส่ง</th>
                                <th>ยอดสุทธิ</th>
                                <th>สถานะ</th>
                               <!-- <th style="width:110px">แก้ไขรายการ</th>-->
                                <th style="width:110px">Order detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $index=> $order)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$order->pro}}</td>
                                <td>{{$order->cust_name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->amount}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>{{$order->discount}}</td>
                                <td>{{$order->transport_price}}</td>
                                <td>{{$order->price_net}}</td>
                                <td></td>
                                <td>
                                <div class="btn-group">
                                        <a class="btn btn-default" href="/paymentfrom/{{$orders->order_id}}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default deleted-item" href="/payment/{{$orders->order_id}}"><i class="fa fa-trash"></i></a>
                                </div> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>



@endsection
