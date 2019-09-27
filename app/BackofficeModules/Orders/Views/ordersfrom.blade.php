@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">รายละเอียดใบสั่งซื้อ</div>
            <div class="panel-body">
                <div class="form-group">
                        <b>ชื่อลูกค้า : {{$order->cust_name}}</b><br>
                        <b>ที่อยู่ : {{$order->address}} </b><br>
                        <b>เบอร์โทร : {{$order->tel}}  </b>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>รหัสสินค้า</th>
                            <th>รายการ</th>
                            <th>จำนวน</th>
                            <th>ราคาต่อหน่วย</th>
                            <th>จำนวนเงิน</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($shops as $shop)
                        <tr>
                            <td>{{$shop->pro_id}}</td>
                            <td>{{$shop->pro_name}}</td>
                            <td>{{$shop->amount}}</td>
                            <td>{{$shop->price_per_unit}}</td>
                            <td>{{$shop->total_price}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                            <tr><td colspan="4" class="text-right">รวม</td>
                            <td>{{$order->total_price}}</td>
                            </tr>
                            <tr><td colspan="4" class="text-right">ส่วนลด</td>
                            <td>{{$order->discount}}</td>
                            </tr>
                            <tr><td colspan="4" class="text-right">ค่าส่ง</td>
                            <td>{{$order->transport_price}}</td>
                            </tr>
                            <tr><td colspan="4" class="text-right">ยอดสุทธิ</td>
                            <td>{{$order->price_net}}</td>
                            </tr>   
                            <tr><td colspan="4" class="text-right">เลขพัสดุ</td>
                            <td>{{$order->transport_number}}</td>
                            </tr>   
                </table>
                <form action="/orders/{{$order->order_id}}" class="form-ajax" call_back='yes' method="PUT">
                    <input type="hidden"value="PUT" name="_methods">
                        <div class="form-group col-md-4">
                            <label>หมวดสินค้า:</label>
                            <select name="status">
                                <option value="status">
                                กรุณาเลือกสถานะ
                                </option>
                                <option value='ใบสั่งซื้อใหม่' {{ isset($order) && $order->status=='ใบสั่งซื้อใหม่'?'selected':''}} >
                                ใบสั่งซื้อใหม่
                                </option>
                                <option value='ใบสั่งซื้อรอชำระเงิน' {{ isset($order) && $order->status=='ใบสั่งซื้อรอชำระเงิน'?'selected':''}} >
                                ใบสั่งซื้อรอชำระเงิน
                                </option>
                                <option value='ใบสั่งซื้อชำระเงินแล้ว' {{ isset($order) && $order->status=='ใบสั่งซื้อชำระเงินแล้ว'?'selected':''}}>
                                ใบสั่งซื้อชำระเงินแล้ว
                                </option>
                                <option value='ใบสั่งซื้อส่งสินค้าแล้ว' {{ isset($order) && $order->status=='ใบสั่งซื้อส่งสินค้าแล้ว'?'selected':''}} >
                                ใบสั่งซื้อส่งสินค้าแล้ว
                                </option>
                                <option value='ใบสั่งซื้อได้รับสินค้าแล้ว' {{ isset($order) && $order->status=='ใบสั่งซื้อได้รับสินค้าแล้ว'?'selected':''}} >
                                ใบสั่งซื้อได้รับสินค้าแล้ว
                                </option>
                            </select>
                        </div>
                    <!-- <div class="row">
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">สถานะ:</label>
                                <select class="form-control" name="status">
                                    <option value="ใบสั่งซื้อใหม่">ใบสั่งซื้อใหม่</option>
                                    <option value="ใบสั่งซื้อรอชำระเงิน">ใบสั่งซื้อรอชำระเงิน</option>
                                    <option value="ใบสั่งซื้อชำระเงินแล้ว">ใบสั่งซื้อชำระเงินแล้ว</option>
                                    <option value="ใบสั่งซื้อส่งสินค้าแล้ว">ใบสั่งซื้อส่งสินค้าแล้ว</option>
                                    <option value="ใบสั่งซื้อได้รับสินค้าแล้ว">ใบสั่งซื้อได้รับสินค้าแล้ว</option>
                                </select>
                            </div>
                        </div> --> 
                        <div class="col-md-4">
                        <div class="form-group">
                                <label for="status">เลขพัสดุ:</label>
                                <input class="form-control" name="transport_number">
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                                <label for="status">ประเภทการขนส่ง:</label>
                                <select class="form-control" name="transport_type">
                                    <option value="ลงทะเบียน">ลงทะเบียน</option>
                                    <option value="EMS">EMS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="/orders" class="btn btn-info">กลับ</a>
                </form>
            </div>
        </div>
    </div>
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