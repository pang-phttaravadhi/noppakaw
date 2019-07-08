@extends('custom-layout')
        @section('title')
        @section('content' )
        <form action="/action_page.php">
  <div class="form-group">
    <label for="email">รหัสสินค้า:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">ชื่อสินค้า:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">หมวดสินค้า:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">ราคาสินค้า:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">บันทึก</button>
</form>
@endsection