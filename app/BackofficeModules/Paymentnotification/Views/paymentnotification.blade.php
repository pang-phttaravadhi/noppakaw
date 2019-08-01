@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/paymentnotification">
                        <div class="form-group">
                            <label>ชื่อ-นามสกุลลูกค้า</label>
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
                <div class="panel-heading">แจ้งชำระเงิน</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>เลขใบสั่งซื้อ</th>
                                <th>ชื่อลูกค้า</th>
                                <th>จำนวนเงิน</th>
                                <th>หลักฐานการโอน</th>
                                <th>การอนุมัติสถานะ</th>
                                <th style="width:100px">ดูการเเจ้งชำระเงิน</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>$index+1</td>
                                <td>01</td>
                                <td>คุณมานี</td>
                                <td>2000</td>
                                <td></td>
                                <td>รอโอนเงิน</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default deleted-item" ><i class="fa fa-trash"></i></a>
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