@extends('liff-layout')
@section('title','ตะกร้าสินค้า')
@section('content' )
<div>
    <h4>รายการใบสั่งซื้อ</h4>
    <div class="panel panel-default">
      <div class="panel-heading text-center"><strong>รายการสินค้า</strong></div>
      <div class="panel-body">
        <table style="width:100%">
        <h3>หน้าแรกของสินค้า</h3>
        @foreach($products as $index => $pro)
          <tr>
            <td colspan="2" style="margin-bottom:5px;padding:10px 0">
                <a href="/liff/shoppingcart/{{$pro->pro_id}}">
                  <img src="{{$pro->image}}"  alt="Nature" style="width:20%;float:left;">
                </a>
                <div style="width:78%;float:right;margin-left:5px;">
                  <p style="margin:3px;"><strong>{{$pro->pro_name}}</strong></p>
                  <p style="margin:3px;">{{$pro->price}} บาท</p>
                  <p style="margin:3px;">จำนวน : <input class="text-center" style="width:85px;padding:5px;" type="number" value="{{$pro->amount}}"></p>
                </div>
            </td>
          </tr>
        @endforeach
            <tr>
              <td class="text-right" style="padding-top:10px;margin-bottom:2px;border-top:3px double #ccc;font-size:15px;">
                <strong>จำนวนทั้งหมด :</strong>
              </td>
              <td class="text-right" style="padding-top:10px;margin-bottom:2px;border-top:3px double #ccc;width:120px;font-size:15px;">
                <strong>{{$shopping_cart->total_amount}}</strong>
              </td>
            </tr>
            <tr>
              <td class="text-right" style="padding-top:10px;margin-bottom:2pxfont-size:15px;">
                <strong>ราคารวม :</strong>
              </td>
              <td class="text-right" style="padding-top:10px;margin-bottom:2px;font-size:15px;">
                <strong>{{$shopping_cart->total_price}}</strong>
              </td>
            </tr>
            <tr>
              <td class="text-right" style="padding-top:10px;margin-bottom:2px;font-size:15px;">
                <strong>ส่วนลด :</strong>
              </td>
              <td class="text-right" style="padding-top:10px;margin-bottom:2px;font-size:15px;">
                <strong>{{$discount}}</strong>
              </td>
            </tr>
            <tr>
              <td class="text-right" style="padding-top:10px;padding-bottom:10px;margin-bottom:2px;font-size:15px;">
                <strong>ค่าขนส่ง :</strong>
              </td>
              <td class="text-right" style="padding-top:10px;padding-bottom:10px;margin-bottom:2px;font-size:15px;">
                <strong>{{$shipping}}</strong>
              </td>
            </tr>
            <tr>
              <td class="text-right" style="border-top:3px double #ccc;border-bottom:3px double #ccc;padding:10px 0;margin-bottom:2px;font-size:19px;color:#b00">
                <strong>ยอดสุทธิ :</strong>
              </td>
              <td class="text-right" style="border-top:3px double #ccc;border-bottom:3px double #ccc;padding:10px 0;margin-bottom:2px;font-size:19px;color:#b00">
                <strong>{{$price_net}}</strong>
              </td>
            </tr>
        </table>
        <a href="/liff/shoppingcartfrom" style='margin:25px 0;' class="btn btn-primary btn-block">ป้อนที่อยู่ในการจัดส่งสินค้า</a>
      </div>
  </div>
</div>


@endsection