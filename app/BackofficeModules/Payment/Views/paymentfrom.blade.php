@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/payment"กลับ></a>
    <div class="panel-heading" style="font-size:20px;">
    </div>
    @if(isset($product))
      <form action="/payment/{{$payment->pay_id}}"  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
        @csrf()
    @else
      <form class="form-ajax" action="/payment" method="POST">
    @csrf()
    @endif
    <div class="form-group">
      <label>ชื่อลูกค้า:</label>
      <input type="text" class="form-control"  name="cust_name" value="{{ isset($payment) ? $payment->cust_name:''}}">
    </div>
    <div class="form-group">
      <label>ที่อยู่ในการจัดส่ง:</label>
      <input type="text" class="form-control"  name="address" value="{{ isset($payment) ? $payment->address:''}}">
    </div>
    <div class="form-group">
      <label>ชื่อสินค้า:</label>
      <input type="text" class="form-control"  name="pro_name" value="{{ isset($payment) ? $payment->pro_name:''}}">
    </div>
    <div class="form-group">
      <label>ราคาสินค้า:</label>
      <input type="text" class="form-control"  name="price" value="{{  isset($payment) ? $payment->price:''}}">
    </div>
    <div class="form-group">
      <label>ราคารวม:</label>
      <input type="text" class="form-control"  name="amount" value="{{ isset($payment) ? $payment->amount:''}}">
    </div>
    <div class="form-group">
      <label>ค่าจัดส่ง:</label>
      <input type="text" class="form-control"  name="delvfe" value="{{ isset($payment) ? $payment->delvfe:''}}">
    </div>
    <div class="form-group">
      <label>ส่วนลด:</label>
      <input type="text" class="form-control"  name="count" value="{{ isset($payment) ? $payment->count:''}}">
    </div>
    <div class="form-group">
      <label>ยอดสุทธิ:</label>
      <input type="text" class="form-control"  name="net" value="{{ isset($payment) ? $payment->net:''}}">
    </div>
    <div class="form-group">
      <label>สถานะ:</label>
      <input type="text" class="form-control"  name="status" value="{{ isset($payment) ? $payment->status:''}}">
    </div>
    <div class="form-group">
      <label>เลขพัสดุ:</label>
      <input type="text" class="form-control"  name="parcel" value="{{ isset($payment) ? $payment->parcel:''}}">
    </div>
    <div class="form-group">
      <label>ธนาคาร:</label>
      <select name="cate_id">
        <option value="">
          กรุณาเลือกธนาคาร
          </option>
          @foreach($payment as $index=> $row)
          <option value="{{$row->pay_id}}" {{ isset($payment) && $payment->pay_id==$row->pay_id?'selected':''}}>
          {{$row->pro_name}}
          </option>
          @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
    <a href="/payment" class="btn btn-info">กลับ</a>
  </form>
</div>


       
@endsection