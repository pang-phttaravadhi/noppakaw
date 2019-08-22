@extends('liff-layout')
@section('title','history')
@section('content' )
<div>
    <h4>ประวัติการสั่งซื้อ</h4>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>ประวัติใบสั่งซื้อ</strong></div>
        <div class="panel-body">
            <table style="width:100%">
                @for($i=0;$i<1;$i++)
                <tr>
                    <td colspan="2" style="margin-bottom:5px;padding:10px 0">
                        
                            <th><strong>รหัสใบสั่งซื้อ</strong></th>
                            <th>ว/ด/ปที่ซื้อ</th>
                            <th>ราคาสุทธิ</th>
                            <th>สถานะ</th>
                            
                    </td>
                </tr>
                @endfor
            </table>
            <a href="/liff/historyfrom" style='margin:25px 0;' class="btn btn-wheat btn-block">ใบสั่งซื้อสินค้า</a>
        </div>
    </div>    
</div>

@endsection


