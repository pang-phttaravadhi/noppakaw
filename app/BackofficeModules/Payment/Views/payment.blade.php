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
                            <input type="text" class="form-control"  name="" value="">
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
                                <th>ลำดับที่</th>
                                <th>เลขใบสั่งซื้อ</th>
                                <th>รายการสินค้า</th>
                                <th>ชื่อลูกค้า</th>
                                <th>ที่อยู่ในการจัดส่ง</th>
                                <th>ราคารวม</th>
                               <!-- <th style="width:110px">แก้ไขรายการ</th>-->
                                <th style="width:110px">Order detail</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/paymentfrom" class="btn btn-primary" role="button">Order detail</a> 

 
                                    </div> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>



@endsection
