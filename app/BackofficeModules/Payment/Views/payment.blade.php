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
                                <th>รายการสินค้า</th>
                                <th>ชื่อลูกค้า</th>
                                <th>ที่อยู่ในการจัดส่ง</th>
                                <th>ราคารวม</th>
                                <th>

                                <th></th>
                               <!-- <th style="width:110px">แก้ไขรายการ</th>-->
                                <th style="width:110px">Order detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($payment as $index=> $payment)
                            <tr>
                                <td>{{$index+$orders->firstItem()}}</td>
                                <td>{{$row->detail_id}}</td>
                                <td>{{$row->cust_name}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->amount}}</td>
                                <td>
                                <div class="btn-group">
                                    <a href="/orders/{{$row->order_id}}" class="btn btn-info" role="button">Order detail</a> 
                                    </div> 
                                    <!--<div class="btn-group">
                                        <a class="btn btn-default" href="/payment/{{$row->pay_id}}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default deleted-item" href="/payment/{{$row->pay_id}}"><i class="fa fa-trash"></i></a>
                                    </div> -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!$orders->render()!!}
                </div>
            </div>
        </div>
    </div>  
</div>



@endsection
