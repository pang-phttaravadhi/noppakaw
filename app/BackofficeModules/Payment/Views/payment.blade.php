@extends('custom-layout')
@section('title')
@section('content' )

 
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">การแจ้งชำระเงิน</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ชื่อลูกค้า</th>
                                <th>ที่อยู่ในการจัดส่ง</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคาสินค้า</th>
                                <th>สถานะ</th>
                                <th>เลขพัสดุ</th>
                                <th style="width:110px">แก้ไขรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<10;$i++)
                            <tr>
                                <td>คุณมานี</td>
                                <td>54/87 หมู่บ้านลภาวัน19 ต.คลองข่อย อ.ปากเกร็ด จ.นนทบุรี 11120 0991152220</td>
                                <td>01</td>
                                <td>ชุดไทยเรือนต้น</td>
                                <td>1000 บาท</td>
                                <td>ชำระเรียบร้อย</td>
                                <td>ed38004592th</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">แก้ไข</button>
                                        <button type="button" class="btn btn-sm btn-primary">ลบ</button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
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
</div>



@endsection