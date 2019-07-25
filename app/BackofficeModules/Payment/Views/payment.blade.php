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
                        <button type="submit" class="btn btn-default">ค้นหา</button>
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
                                <th>ลำดับที่</th>
                                <th>เลขใบสั่งซื้อ</th>
                                <th>เลขบัญชีลูกค้า</th>
                                <th>ราคาสินค้า</th>
                                <th>สถานะการอนุมัติ</th>
                                <th style="width:110px">แก้ไขรายการ</th>
                                <th style="width:110px">Order detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($payment as $index=> $row)
                            <tr>
                                <td>{{$index+$payment->firstItem()}}</td>
                                <td>{{$row->order_id}}</td>
                                <td>{{$row->bank_account}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->approved_status}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="/payment/{{$row->pay_id}}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default deleted-item" href="/payment/{{$row->pay_id}}"><i class="fa fa-trash"></i></a>
                                    </div> 
                                </td>
                                <td>
                                <!--<ul class="nav navbar-nav">
                                <li class="nav-menu"><a href="/paymentdetail" class="btn btn-info" role="button">Order detail</a></li> -->
                                    <div class="btn-group">
                                    <a href="/payment/paymentdetail" class="btn btn-info" role="button">Order detail</a> 
                                    </div> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!$payment->render()!!}
                </div>
            </div>
        </div>
    </div>  
</div>



@endsection
