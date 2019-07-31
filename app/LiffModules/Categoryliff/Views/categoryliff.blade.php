@extends('liff-layout')
@section('title','หมวดสินค้า')
@section('content' )

<div>
    <div class="text-center">
        <h1>หมวดสินค้า</h1>
        <h3>สร้างขึ้นเพื่อการศึกษา<h3>
    </div>
    <h1>ชุดไทย</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://www.greatstarsdigital.com/wp-content/uploads/2017/08/%E0%B9%83%E0%B8%9A%E0%B9%80%E0%B8%9F%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%99_%E0%B9%91%E0%B9%97%E0%B9%90%E0%B9%98%E0%B9%92%E0%B9%92_0010.jpg">
                <img src="https://www.greatstarsdigital.com/wp-content/uploads/2017/08/%E0%B9%83%E0%B8%9A%E0%B9%80%E0%B8%9F%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%99_%E0%B9%91%E0%B9%97%E0%B9%90%E0%B9%98%E0%B9%92%E0%B9%92_0010.jpg" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยจักรพรรดิ สีเงิน</p>
                        <p>3000 บาท</p>
                        <p>น้ำหนัก 0.9 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://i.pinimg.com/736x/38/d2/b5/38d2b5994f4df4daf4bb651d1bbbb85a.jpg">
                <img src="https://i.pinimg.com/736x/38/d2/b5/38d2b5994f4df4daf4bb651d1bbbb85a.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยจักรพรรดิ สีแดงเลือดนก</p>
                        <p>3000 บาท </p>
                        <p>น้ำหนัก 0.9 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://i.pinimg.com/564x/06/0d/19/060d1957a3d78f2b9096c95f3c184ec0.jpg">
                <img src="https://i.pinimg.com/564x/06/0d/19/060d1957a3d78f2b9096c95f3c184ec0.jpg" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยจักรพรรดิ สีชมพู</p>
                        <p>3500 บาท</p>
                        <p>น้ำหนัก 0.9 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="http://entertain.teenee.com/series/img6/1023314.jpg">
                <img src="http://entertain.teenee.com/series/img6/1023314.jpg" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยเรือนต้น สีชมพู</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.8 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://media-spiceee.net/uploads/content/image/1210189/large_20481824_108226513187978_6419065731836542976_n.jpg">
                <img src="https://media-spiceee.net/uploads/content/image/1210189/large_20481824_108226513187978_6419065731836542976_n.jpg" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยเรือนต้น สีขาว</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.8 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://www.matichon.co.th/wp-content/uploads/2019/05/%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B8%94%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%81%E0%B8%B2012.jpg">
                <img src="https://www.matichon.co.th/wp-content/uploads/2019/05/%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B8%94%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%81%E0%B8%B2012.jpg" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยเรือนต้น สีครีม</p>
                        <p>3000 บาท</p>
                        <p>น้ำหนัก 0.8 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://th-live-02.slatic.net/original/0f76c2267524f0d284a2a4a1905635f9.jpg">
                <img src="https://th-live-02.slatic.net/original/0f76c2267524f0d284a2a4a1905635f9.jpg" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยจิตรลดา สีครีม</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.8 กิโลกรัม</p>
                        <p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://fu.lnwfile.com/81mfrt.jpg">
                <img src="https://fu.lnwfile.com/81mfrt.jpg" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยจิตรลดา สีขาว</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.8 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://ck.lnwfile.com/_/ck/_raw/0u/te/kt.jpg">
                <img src="https://ck.lnwfile.com/_/ck/_raw/0u/te/kt.jpg" style="width:100%">
                    <div class="caption">
                        <p>ชุดไทยจิตรลดา สีดำ</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.8 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                             
            </div>
        </div>
    </div>
    <h1>เครื่องประดับ</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://q.lnwfile.com/f8sy2f.jpg">
                <img src="https://q.lnwfile.com/f8sy2f.jpg" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>เซตเครื่องประดับ</p>
                        <p>1000 บาท</p>
                        <p>น้ำหนัก 0.3 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://q.lnwfile.com/_/q/_raw/2i/2p/9j.jpg">
                <img src="https://q.lnwfile.com/_/q/_raw/2i/2p/9j.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>เซตเครื่องประดับ</p>
                        <p>3000 บาท </p>
                        <p>น้ำหนัก 0.3 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://th-test-11.slatic.net/p/790da1a28b8cba87f7ec7b0c3ee5f5b2.jpg">
                <img src="https://th-test-11.slatic.net/p/790da1a28b8cba87f7ec7b0c3ee5f5b2.jpg" style="width:100%">
                    <div class="caption">
                        <p>เครื่องประดับ สร้อย และ ต่างหู</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.3 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                             
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://i.pinimg.com/originals/5b/d2/6b/5bd26bde0885b76b27efcf5b7a978cc8.jpg">
                <img src="https://i.pinimg.com/originals/5b/d2/6b/5bd26bde0885b76b27efcf5b7a978cc8.jpg" style="width:100%">
                    <div class="caption">
                        <p>เครื่องประดับ ต่างหู</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.2 กิโลกรัม </p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://i.pinimg.com/originals/1a/12/54/1a12544af98e9194b56623383d00e08d.jpg">
                <img src="https://i.pinimg.com/originals/1a/12/54/1a12544af98e9194b56623383d00e08d.jpg" style="width:100%">
                    <div class="caption">
                        <p>เครื่องประดับ ต่างหู</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.2 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                 
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://i.pinimg.com/originals/1d/b5/94/1db59432164533a7e70a75fabffae466.jpg">
                <img src="https://i.pinimg.com/originals/1d/b5/94/1db59432164533a7e70a75fabffae466.jpg" style="width:100%">
                    <div class="caption">
                        <p>เครื่องประดับ ต่างหู</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.2 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://i.pinimg.com/originals/20/51/c0/2051c0e71e4735cb0752f8c2d76c87a3.jpg">
                <img src="https://i.pinimg.com/originals/20/51/c0/2051c0e71e4735cb0752f8c2d76c87a3.jpg" style="width:100%">
                    <div class="caption">
                        <p>เครื่องประดับ สร้อย</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.2 กิโลกรัม </p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxuApz9FlJ_wlov8nQOTFCu_DeC62C7OypAYCALiP7EYaTi1XY">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxuApz9FlJ_wlov8nQOTFCu_DeC62C7OypAYCALiP7EYaTi1XY" style="width:100%">
                    <div class="caption">
                        <p>เครื่องประดับ สร้อย</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.2 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                               
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqzbUhRzuL2LAoX-jrfE3BUPRajTIss1z201JeDRLSXmKGtWLt">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqzbUhRzuL2LAoX-jrfE3BUPRajTIss1z201JeDRLSXmKGtWLt" style="width:100%">
                    <div class="caption">
                        <p>เครื่องประดับ สร้อย</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.2 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
    </div>
    <h1>รองเท้า</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://res.weloveshopping.com/912459/w_450,h_450,c_thumb/ed1af5291cb4f9cc0326d7e7db7e5dba/1.jpg">
                <img src="https://res.weloveshopping.com/912459/w_450,h_450,c_thumb/ed1af5291cb4f9cc0326d7e7db7e5dba/1.jpg" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสีดำมีกระดิ่งห้อยรูปหัวใจ</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://cb.lnwfile.com/bisuld.jpg">
                <img src="https://cb.lnwfile.com/bisuld.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสีครีม</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                    
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://th-test-11.slatic.net/original/ab3f0a87f00654eecbdbb818721a49b0.jpg">
                <img src="https://th-test-11.slatic.net/original/ab3f0a87f00654eecbdbb818721a49b0.jpg" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าคัชชูหนังแท้</p>
                        <p>500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://th-live-01.slatic.net/original/89c72c15d604a4c2cf2b82b702808061.jpg">
                <img src="https://th-live-01.slatic.net/original/89c72c15d604a4c2cf2b82b702808061.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสีครีม</p>
                        <p>1500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                       
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://ww12.marketplacediscount.co/13769-1-large_default/QUTAA-2018-%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B8%9B%E0%B8%B1%E0%B9%8A%E0%B8%A1%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B9%E0%B8%87%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87-Pointed-Toe-Elegant-Sweet.jpg">
                <img src="https://ww12.marketplacediscount.co/13769-1-large_default/QUTAA-2018-%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B8%9B%E0%B8%B1%E0%B9%8A%E0%B8%A1%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B9%E0%B8%87%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87-Pointed-Toe-Elegant-Sweet.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสีดำ</p>
                        <p>1000 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="http://thailand.startbestdaystore.com/img/p/1/69393-large_default.jpg">
                <img src="http://thailand.startbestdaystore.com/img/p/1/69393-large_default.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสีชมพูสนเตี้ย</p>
                        <p>1500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม </p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://ww16.shoppingmarket.co/img/p/1/29337-large_default.jpg">
                <img src="https://ww16.shoppingmarket.co/img/p/1/29337-large_default.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสีชมพูผูกโบว์</p>
                        <p>1500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="http://th.easy-as-123-store.com/images/Avvvxbw%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B9%80%E0%B8%8B%E0%B9%87%E0%B8%81%E0%B8%8B%E0%B8%B5%E0%B9%88%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B9%E0%B8%87%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%81%E0%B8%AA%E0%B8%94%E0%B8%87%E0%B8%9A%E0%B8%99%E0%B9%80%E0%B8%A7%E0%B8%97%E0%B8%B5%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B9%81%E0%B8%95%E0%B8%B0%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87c516_8191_1_full.jpg">
                <img src="http://th.easy-as-123-store.com/images/Avvvxbw%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B9%80%E0%B8%8B%E0%B9%87%E0%B8%81%E0%B8%8B%E0%B8%B5%E0%B9%88%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B9%E0%B8%87%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%81%E0%B8%AA%E0%B8%94%E0%B8%87%E0%B8%9A%E0%B8%99%E0%B9%80%E0%B8%A7%E0%B8%97%E0%B8%B5%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B9%81%E0%B8%95%E0%B8%B0%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87c516_8191_1_full.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสนเข็ม</p>
                        <p>2500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="http://tha.stores-fast-infrastructure.com/content/1/25541_Beango-2017%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B8%9E%E0%B8%B1%E0%B8%99%E0%B8%98%E0%B8%B8%E0%B9%8C%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B8%94%E0%B8%AD%E0%B8%81%E0%B9%84%E0%B8%A1%E0%B9%89%E0%B8%95%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%87%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B9%E0%B8%87%E0%B8%AA%E0%B8%B8%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B8%B5%E0%B8%9B%E0%B8%81%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%81%E0%B8%A5%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%AD%E0%B8%81%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87g.jpg">
                <img src="http://tha.stores-fast-infrastructure.com/content/1/25541_Beango-2017%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B8%9E%E0%B8%B1%E0%B8%99%E0%B8%98%E0%B8%B8%E0%B9%8C%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87%E0%B8%94%E0%B8%AD%E0%B8%81%E0%B9%84%E0%B8%A1%E0%B9%89%E0%B8%95%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%87%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B9%E0%B8%87%E0%B8%AA%E0%B8%B8%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B8%B5%E0%B8%9B%E0%B8%81%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%81%E0%B8%A5%E0%B8%A7%E0%B8%87%E0%B8%AD%E0%B8%AD%E0%B8%81%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AB%E0%B8%8D%E0%B8%B4%E0%B8%87g.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>รองเท้าสนสูงสีชมพูลายดอกไม้</p>
                        <p>1500 บาท</p>
                        <p>น้ำหนัก 0.15 กิโลกรัม</p>
                    </div>
                </a>
                <div class="container">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add To Cart</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" style="font-size=16px;"
                                    <h3>ได้เพิ่มสินค้าลงในตะกร้าสินค้าเรียบร้อยแล้วค่ะ</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                             
            </div>
        </div>
    </div>
</div>
@endsection