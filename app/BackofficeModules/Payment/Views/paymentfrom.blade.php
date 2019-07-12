@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="col-md-11">
        <div class="panel panel-default">
            <div class="panel-heading">ใบสั่งซื้อ</div>
            <div class="panel-heading">ชื่อลูกค้า : คุณมานี</div>
            <div class="panel-heading">ที่อยู่ในการจัดส่ง : 54/87 หมู่บ้านลภาวัน19 ต.คลองข่อย อ.ปากเกร็ด จ.นนทบุรี 11120 Tel.0991152220 </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>รหัสสินค้า</th>
                            <th>รายละเอียดสินค้า</th>
                            <th>ราคา</th>
                            <th>จำนวน</th>
                            <th>ราคารวม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>ชุดสไบสีทอง</td>
                            <td>1000</td>
                            <td>2</td>
                            <td>2,000</td>
                            </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0002</td>
                            <td>เครื่องประดับ</td>
                            <td>500บาท</td>
                            <td>2</td>
                            <td>1,000</td>
                            </td>
                            <tr>
                            <th>รวม</th>
                            <td></td>
                            <td></td>
                            <td>4</td>
                            <td>3,000</td>
                            </td>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <th>ค่าส่ง</th>
                            <td></td>
                            <td>50</td>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <th>ส่วนลด</th>
                            <td></td>
                            <td>10%</td>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <th>ยอดรวมสุทธิ</th>
                            <td></td>
                            <td>2,745</td>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="btn-group">
                            <a href="/payment/paymentfrom">
                            </a>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
<button type="submit" class="btn btn-info"><a href="/payment/">กลับ</a></button>
@endsection
