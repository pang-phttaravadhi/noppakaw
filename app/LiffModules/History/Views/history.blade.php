@extends('liff-layout')
@section('title','history')
@section('content' )
<div>
    <h4>รายการใบสั่งซื้อ</h4>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>รายการสินค้า</strong></div>
        <div class="panel-body">
            <table style="width:100%">
                @for($i=0;$i<2;$i++)
                <tr>
                    <td colspan="2" style="margin-bottom:5px;padding:10px 0">
                        <a href="https://i.pinimg.com/736x/38/d2/b5/38d2b5994f4df4daf4bb651d1bbbb85a.jpg">
                            <img src="https://i.pinimg.com/736x/38/d2/b5/38d2b5994f4df4daf4bb651d1bbbb85a.jpg"  alt="Nature" style="width:20%;float:left;">
                        </a>
                        <div style="width:78%;float:right;margin-left:5px;">
                            <p style="margin:3px;"><strong>เสื้อผ้าปปปปปปปปปปปปปปปป</strong></p>
                            <p style="margin:3px;">ราคา : 200 บาท</p>
                            <p style="margin:3px;">สถานะ จัดส่งเรียบร้อยแล้ว</p>
                                <a href="/liff/historyfrom" style='margin:25px 0;' class="btn btn-wheat btn-block">ใบสั่งซื้อสินค้า</a>
                        </div>
                    </td>
                </tr>
                @endfor
            </table>
        </div>
    </div>    
</div>

@endsection


