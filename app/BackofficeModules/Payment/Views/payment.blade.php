@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">ใบสั่งซื้อ</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>รหัสใบสั่งซื้อ</th>
                            <th>ชื่อ-นามสกุลลูกค้า</th>
                            <th>ที่อยู่ในการจัดส่ง</th>
                            <th>จำนวนเงินสุทธิ</th>
                            <th>สถานะ</th>
                            <th>เลขพัสดุ</th>
                            <th style="width:110px">แก้ไขรายการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>คุณมานี จ่ายแสง</td>
                            <td>54/87 หมู่บ้านลภาวัน19 ต.คลองข่อย อ.ปากเกร็ด จ.นนทบุรี 11120 Tel.0991152220</td>
                            <td>2,745 บาท</td>
                            <td>รอการโอน</td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <a href="/payment/paymentfrom">
                                    <button type="button" class="btn btn-Basic"><a href="/payment/paymentfrom"> Oder deteil</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>0002</td>
                            <td>คุณรัศมี บ้านโป่ง</td>
                            <td>12/7 หมู่บ้านพฤหัส  ต.คลองแข่ว อ.ปากเกร็ด จ.นนทบุรี 11120 Tel.099115333</td>
                            <td>1000 บาท</td>
                            <td>รอการโอน</td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <a href="/payment/paymentfrom">
                                    <button type="button" class="btn btn-Basic"><a href="/payment/paymentfrom"> Oder deteil</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>  
@endsection