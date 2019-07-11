@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
<div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">ชื่อ-นามสกุลลูกค้า</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">เบอร์โทร</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        
                        <button type="submit" class="btn btn-default">ค้นหา</button>
                    </form>
                </div>
            </div>
            
        </div> 
<div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">สถานะการจัดส่งสินค้า</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ชื่อ-นามสกุลลูกค้า</th>
                                <th>ที่อยู่</th>
                                <th>เบอร์โทร</th>
                                <th style="width:110px">แก้ไขรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>คุณมานี จ่ายแสง</td>
                                <td>54/87 หมู่บ้านลภาวัน19 ต.คลองข่อย อ.ปากเกร็ด จ.นนทบุรี 11120</td>
                                <td>0991152220</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">แก้ไข</button>
                                        <button type="button" class="btn btn-sm btn-primary">ลบ</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>คุณรัศมี บ้านโป่ง</td>
                                <td>12/7 หมู่บ้านพฤหัส  ต.คลองแข่ว อ.ปากเกร็ด จ.นนทบุรี 11120</td>
                                <td>0991153330</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">แก้ไข</button>
                                        <button type="button" class="btn btn-sm btn-primary">ลบ</button>
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
</div>
</div>



@endsection