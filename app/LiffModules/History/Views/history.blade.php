@extends('liff-layout')
@section('title','history')
@section('content' )
<div>
    <h4>ประวัติการสั่งซื้อ</h4>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>ประวัติใบสั่งซื้อ</strong></div>
        <div class="panel-body">
            <table style="width:100%">
                @for($i=0;$i<2;$i++)
                <tr>
                    <td colspan="2" style="margin-bottom:5px;padding:10px 0">
                        
                            <p><strong>รหัสใบสั่งซื้อ</strong></p>
                            <p>ว/ด/ปที่ซื้อ</p>
                            <p>ราคาสุทธิ</p>
                            <p>สถานะ</p>
                            <a href="/liff/historyfrom" style='margin:25px 0;' class="btn btn-wheat btn-block">ใบสั่งซื้อสินค้า</a>
                    </td>
                </tr>
                @endfor
            </table>
        </div>
    </div>    
</div>

@endsection


