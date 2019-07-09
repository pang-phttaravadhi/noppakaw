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
  <h2>หมวดสินค้า</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://s.isanook.com/wo/0/ui/25/126877/5020374785a4da84451b4d2211700068d5-021.jpg" target="_blank">
          <img src="https://s.isanook.com/wo/0/ui/25/126877/5020374785a4da84451b4d2211700068d5-021.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>ชุดไทยสไบพร้อมเครื่องประดับ</p>
            <p>ราคา 1000 บาท</p>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://d1wlypst4s8b83.cloudfront.net/wp-content/uploads/2017/12/01171111/991468-img.s30uk2.4d7tg-820x1024.jpg" target="_blank">
          <img src="https://d1wlypst4s8b83.cloudfront.net/wp-content/uploads/2017/12/01171111/991468-img.s30uk2.4d7tg-820x1024.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>ชุดไทยสไบพร้อมเครื่องประดับ</p>
            <p>ราคา 1000 บาท</p>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://d1wlypst4s8b83.cloudfront.net/wp-content/uploads/2017/12/01163431/20905758_1992008381082413_3234376116399505408_n-819x1024.jpg" target="_blank">
          <img src="https://d1wlypst4s8b83.cloudfront.net/wp-content/uploads/2017/12/01163431/20905758_1992008381082413_3234376116399505408_n-819x1024.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>ชุดไทยสไบพร้อมเครื่องประดับ.</p>
            <p>ราคา 1000 บาท</p>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
  <button type="submit" class="btn btn-default">บันทึก</button>
</form>
@endsection