@extends('custom-layout')
@section('title','รายการใบสั่งซื้อ')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/payment">
                        <div class="form-group">
                            <label>ชื่อลูกค้า</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">ค้นหา</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>  
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">ใบสั่งซื้อ</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ลำดับที่</th>
                            <th>ชื่อลูกค้า</th>
                            <th>ที่อยู่ในการจัดส่ง</th>
                            <th>เบอร์โทร</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคาสินค้า</th>
                            <th>ราคารวม</th>
                            <th>ค่าจัดส่ง</th>
                            <th>ส่วนลด</th>
                            <th>ยอดสุทธิ</th>
                            <th>สถานะ</th>
                            <th>เลขพัสดุ</th>
                            <th style="width:100px">แก้ไขรายการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payment as $index=> $pay)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$pay->pay_id}}</td>
                            <td>{{$pay->cust_name}}</td>
                            <td>{{$pay->address}}</td>
                            <td>{{$pay->tel}}</td>
                            <td>{{$pay->pro_name}}</td>
                            <td>{{$pay->price}}</td>
                            <td>{{$pay->amount}}</td>
                            <td>{{$pay->delvfe}}</td>
                            <td>{{$pay->count}}</td>
                            <td>{{$pay->net}}</td>
                            <td>{{$pay->status}}</td>
                            <td>{{$pay->parcel}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default" href="/payment/{{$pay->pay_id}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-default deleted-item" href="/payment/{{$pay->pay_id}}"><i class="fa fa-trash"></i></a>
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
       

@endsection
