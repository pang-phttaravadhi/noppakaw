@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
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
    <div class="form-group">
      <label for="email">รายละเอียดสินค้า:</label>
      <input type="email" class="form-control" id="email">
    </div>
    <button type="button" class="btn btn-primary">บันทึก</button>
    <button type="submit" class="btn btn-info"><a href="/product/">กลับ</a></button>
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