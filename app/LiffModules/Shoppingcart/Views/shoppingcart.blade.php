@extends('liff-layout')
@section('title','ตะกร้าสินค้า')
@section('content' )

<a href="https://i.pinimg.com/736x/38/d2/b5/38d2b5994f4df4daf4bb651d1bbbb85a.jpg">
  <img src="https://i.pinimg.com/736x/38/d2/b5/38d2b5994f4df4daf4bb651d1bbbb85a.jpg" alt="Nature" style="width:20%">
</a>

  <strong class="d-block text-gray-dark">ชุดไทยจักรพรรดิ สีแดงเลือดนก</strong>
  <strong class="d-block text-gray-dark">3000 บาท</strong>
  <strong class="d-block text-gray-dark">น้ำหนัก 0.9 กิโลกรัม</strong>


<ion-list>
    <ion-icon name="add"  on-click="add(inp)"></ion-icon>
    <strong class="d-block text-gray-dark">จำนวน</strong>
      <input text-center style="text-align:center;" #inp class="text-center" id="" type="number" value="0"  min="0">
        <ion-icon name="remove" on-click="remove(inp)"></ion-icon>
  </ion-item>
</ion-list>
<form action="/action_page.php">
<p>ค่าส่งคิดตามน้ำหนัก</p>
<p>0.01-0.05 กก. 50 บาท</p>
<p>0.06-1.00 กก. 100 บาท</p>
<p>มากกว่า 1 กก. 200 บาท</p>
ค่าจัดส่ง:<input type="" name=""><br>  
ส่วนลด: <input type="" name=""><br>
ราคาสุทธิ: <input type="" name=""><br>
<button type="button" class="btn btn-info">ยืนยันการชำระเงิน</button>
</form>

@endsection