@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
  
  <!-- <form action="/product" method="post">

  <form action="/product/1" method="post">
    <input type="hidden" name="_methods" value="put"> -->

    <form action="{{ $action }}" method="post">
    @if(!empty($hidden))
    <input type="hidden" name="_methods" value="{{ $hidden }}">
    @endif

    @csrf()
    @if(isset($product))
    <div class="form-group">
      <label>รหัสสินค้า:</label>
      <input type="text" class="form-control" name="pro_id" value="{{ isset($product) ? $product->pro_id:'' }}" readonly>
    </div>
    @endif
    <div class="form-group">
      <label>ชื่อสินค้า:</label>
      <input type="text" class="form-control"  name="pro_name" value="{{ isset($product) ? $product->pro_name:''}}">
    </div>
    <div class="form-group">
      <label>หมวดสินค้า:</label>
      <input type="text" class="form-control"  name="cate" value="{{ isset($product) ? $product->cate:''}}">
    </div>
    <div class="form-group">
      <label>ราคาสินค้า:</label>
      <input type="text" class="form-control"  name="price" value="{{ isset($product) ? $product->price:''}}">
    </div>
    <div class="form-group">
      <label>รายละเอียดสินค้า:</label>
      <input type="text" class="form-control"  name="pro_det" value="{{ isset($product) ? $product->pro_det:''}}">
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