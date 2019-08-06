@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/product"กลับ></a>
      <div class="panel-heading" style="font-size:20px;"></div>
    @if(isset($product))
      <form action="/product/{{$product->pro_id}}"  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
        @csrf()
    @else
      <form class="form-ajax" action="/product" method="POST">
    @csrf()
    @endif
    <div class="form-group">
      <label>ชื่อสินค้า:</label>
        <input type="text" class="form-control"  name="pro_name" value="{{ isset($product) ? $product->pro_name:''}}">
    </div>
    <div class="form-group">
      <label>หมวดสินค้า:</label>
      <select name="cate_id">
        <option value="">
          กรุณาเลือกหมวดสินค้า
          </option>
          @foreach($category as $index=> $row)
          <option value="{{$row->cate_id}}" {{ isset($product) && $product->cate_id==$row->cate_id?'selected':''}}>
          {{$row->cate_name}}
          </option>
          @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>ประเภทสินค้า:</label>
          <label><input type="checkbox" {{ isset($product) && $product->is_new=='Y'?'checked':''}} name="is_new"value="Y">สินค้าใหม่</label>
          <label><input type="checkbox" {{ isset($product) && $product->is_recommence=='Y'?'checked':''}} name="is_recommence"value="Y">สินค้าแนะนำ</label>
    </div>
    <div class="form-group">
      <label>ราคาสินค้า:</label>
        <input type="text" class="form-control"  name="price" value="{{ isset($product) ? $product->price:''}}">
    </div>
    <div class="form-group">
      <label>น้ำหนัก:</label>
        <input type="text" class="form-control"  name="weight" value="{{ isset($product) ? $product->weight:''}}">
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
      <a href="/product" class="btn btn-info">กลับ</a>
      <h2>ใส่รูปภาพ</h2>
      <div class="row">
        <div class="col-md-4">
          <button type="button" data-callback="uploaded" data-ext="jpg,png,jpeg" class="btn btn-primary upload">อัพโหลดรูปภาพ</button>
          <input type="hidden" value="{{ isset($product) ? $product->image:''}}" name="image" id="image"/>
            <div class="thumbnail">
              <img src="{{ isset($product) ? $product->image:''}}" id="display-image" alt="Lights" style="width:100%">
            </div>
        </div>
      </div>    
  </form>
</div>


       
@endsection
@push('scripts')
<script>
function uploaded(result,el){
$('#image').val(result.url);
$('#display-image').attr('src',result.url);
}
</script>
@endpush