@extends('liff-layout')
@section('title')
@section('content' )
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
                  <p style="margin:3px;">จำนวน : <input class="text-center" style="width:85px;padding:5px;" type="number" value="0"></p>
                </div>
            </td>
          </tr>
          @endfor
          <tr>
            <td class="text-right" style="padding-top:10px;margin-bottom:2px;border-top:3px double #ccc;font-size:15px;">
              <strong>จำนวนทั้งหมด :</strong>
            </td>
            <td class="text-right" style="padding-top:10px;margin-bottom:2px;border-top:3px double #ccc;width:120px;font-size:15px;">
              <strong>2 ชิ้น</strong>
            </td>
          </tr>
          <tr>
            <td class="text-right" style="padding-top:10px;margin-bottom:2pxfont-size:15px;">
              <strong>ราคารวม :</strong>
            </td>
            <td class="text-right" style="padding-top:10px;margin-bottom:2px;font-size:15px;">
              <strong>200 บาท</strong>
            </td>
          </tr>
          <tr>
            <td class="text-right" style="padding-top:10px;margin-bottom:2px;font-size:15px;">
              <strong>ส่วนลด :</strong>
            </td>
            <td class="text-right" style="padding-top:10px;margin-bottom:2px;font-size:15px;">
              <strong>0 บาท</strong>
            </td>
          </tr>
          <tr>
            <td class="text-right" style="padding-top:10px;padding-bottom:10px;margin-bottom:2px;font-size:15px;">
              <strong>ค่าขนส่ง :</strong>
            </td>
            <td class="text-right" style="padding-top:10px;padding-bottom:10px;margin-bottom:2px;font-size:15px;">
              <strong>50 บาท</strong>
            </td>
          </tr>
          <tr>
            <td class="text-right" style="border-top:3px double #ccc;border-bottom:3px double #ccc;padding:10px 0;margin-bottom:2px;font-size:19px;color:#b00">
              <strong>ยอดสุทธิ :</strong>
            </td>
            <td class="text-right" style="border-top:3px double #ccc;border-bottom:3px double #ccc;padding:10px 0;margin-bottom:2px;font-size:19px;color:#b00">
              <strong>250 บาท</strong>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>ที่อยู่ในการจัดส่ง</strong></div>
        <div class="panel-body">
            <table style="width:100%">
                <label>ชื่อ</label>
                <input type="text" class="form-control"  name="" value="">
                <label>ที่อยู่ในการจัดส่ง</label>
                <input type="text" class="form-control"  name="" value="">
                <label>เบอร์โทร</label>
                <input type="text" class="form-control"  name="" value="">
                <a href="/liff/paymentlifffrom" style='margin:25px 0;' class="btn btn-primary btn-block">ยืนยันการชำระเงิน</a>
            </table>
        </div>
    </div>

      
@endsection
