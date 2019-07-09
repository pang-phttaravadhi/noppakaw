@extends('custom-layout')
        @section('title')
        @section('content' )
        <div class="form-group">
    <label for="email">หมวดสินค้า:</label>
    <input type="email" class="form-control" id="email">
    <div class="container">
  <h2>หมวดสินค้า</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://q.lnwfile.com/2i2p9j.jpg" target="_blank">
          <img src="https://q.lnwfile.com/2i2p9j.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>ชุดเซ็ทเครื่องประดับ</p>
            <p>ราคา 1000 บาท</p>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://q.lnwfile.com/f8sy2f.jpg" target="_blank">
          <img src="https://q.lnwfile.com/f8sy2f.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>ชุดเซ็ทเครื่องประดับ</p>
            <p>ราคา 1500 บาท</p>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://cache.gmo2.sistacafe.com/images/uploads/summary/image/31558/Noon_Cover.jpg" target="_blank">
          <img src="https://cache.gmo2.sistacafe.com/images/uploads/summary/image/31558/Noon_Cover.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>ชุดไทยสไบพร้อมเครื่องประดับ.</p>
            <p>ราคา 2000 บาท</p>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


@endsection