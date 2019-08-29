@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/orders">
                        <div class="form-group">
                            <label>ชื่อลูกค้า</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                            <label>สถานะ</label>
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
                                <th>รหัสใบสั่งซื้อ</th>
                                <th>ชื่อลูกค้า</th>
                                <th>ยอดสุทธิ</th>
                                <th>สถานะ</th>
                               <th style="width:50px">Order detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $index=> $order)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$order->order_id}}</td>
                                <td>{{$order->cust_name}}</td>
                                <td>{{$order->price_net}}</td>
                                <td>{{$order->status}}</td>
                                <td>
                                <div class="btn-group">
                                <a href="/ordersfrom/{{$order->order_id}}" class="btn btn-primary" role="button">Order detail</a> 
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