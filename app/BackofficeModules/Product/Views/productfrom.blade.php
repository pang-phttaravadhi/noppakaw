@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/product"กลับ></a>
    <div class="panel-heading" style="font-size:20px;">
    </div>
    @if(isset($product))
      <form action="/product/{{$product->pro_id}}"  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
        @csrf()
    @else
      <form class="form-ajax"action="/product"method="POST">
    @csrf()
    @endif
    <div class="form-group">
      <label>ชื่อสินค้า:</label>
        <input type="text" class="form-control"  name="pro_name" value="{{ isset($product) ? $product->pro_name:''}}">
    </div>
    <div class="form-group">
      <label>หมวดสินค้า:</label>
        <select class="browser-default custom-select" name="cate_id">
            <option value="0" >หมวดสินค้า</option>
            <option {{(isset($product) && $product->cate_id==1)?'selected':''}} value="1">ชุดไทย</option>
            <option {{(isset($product) && $product->cate_id==2)?'selected':''}} value="2">เครื่องประดับ</option>
            <option {{(isset($product) && $product->cate_id==3)?'selected':''}} value="3">รองเท้า</option>
        </select>
    </div>
    <div class="form-group">
      <label>ราคาสินค้า:</label>
        <input type="text" class="form-control"  name="price" value="{{ isset($product) ? $product->price:''}}">
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
      <a href="/product" class="btn btn-info">กลับ</a>
      <h2>ใส่รูปภาพ</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="https://s.isanook.com/wo/0/ui/25/126877/5020374785a4da84451b4d2211700068d5-021.jpg" target="_blank">
              <img src="https://s.isanook.com/wo/0/ui/25/126877/5020374785a4da84451b4d2211700068d5-021.jpg" alt="Lights" style="width:100%">
            </a>
          </div>
        </div>
      </div>    
  </form>
</div>


       
@endsection