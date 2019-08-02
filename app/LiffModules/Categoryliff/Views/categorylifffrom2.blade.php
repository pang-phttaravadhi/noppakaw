@extends('liff-layout')
@section('title','หมวดสินค้า')
@section('content' )
<div class="panel panel-default">
    <div class="panel-heading text-center"><strong>หมวดสินค้า</strong></div>
    <div class="panel-body">
        <a class="btn btn-info" href="/liff/categorylifffrom1">ชุดไทย</a>
        <a class="btn btn-info" href="/liff/categorylifffrom2">เครื่องประดับ</a>
        <a class="btn btn-info" href="/liff/categorylifffrom3">รองเท้า</a>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://q.lnwfile.com/f8sy2f.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>เซตเครื่องทอง</p>
                    <p>1000 บาท</p>
                    <p>น้ำหนัก 0.3 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://inwfile.com/s-q/2i2p9j.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>เซทเครื่องพลอย</p>
                    <p>1500 บาท</p>
                    <p>น้ำหนัก 0.3 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://th-test-11.slatic.net/p/790da1a28b8cba87f7ec7b0c3ee5f5b2.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>เครื่องประดับ สร้อย และ ต่างหู</p>
                    <p>500 บาท</p>
                    <p>น้ำหนัก 0.3 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-6">
        <div class="thumbnail">
            <a href="/liff/product-detail/1">
            <img src="https://i.pinimg.com/originals/5b/d2/6b/5bd26bde0885b76b27efcf5b7a978cc8.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                    <p>เครื่องประดับ ต่างหู</p>
                    <p>500 บาท</p>
                    <p>น้ำหนัก 0.2 กรัม</p>
                </div>
            </a>
            <div class="container">
            <button style='font-size:14px'><i class='fa fa-shopping-cart'></i></button>
            </div>
        </div>
    </div>
    <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
    </ul>
</div>
@endsection