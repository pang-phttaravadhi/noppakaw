<div class="panel panel-default">
        <div class="panel-heading text-center"><strong>ที่อยู่ในการจัดส่ง</strong></div>
        <div class="panel-body">
            <table style="width:100%">
            <form action="/liff/shoppingcart-shipping/{{$customer->cust_id}}" class="form-ajax" method="POST">
                        <input type="hidden" value="POST" name="_mathods">
                <div class="form-group">
                    <label>ชื่อ:</label>
                    <input type="text" class="form-control"  name="cust_name" value="{{isset($customer)?$customer->cust_name:''}}">
                </div>
                <div class="form-group">
                    <label>ที่อยู่ในการจัดส่ง:</label>
                    <input type="text" class="form-control"  name="address" value="{{isset($customer)?$customer->address:''}}">
                </div>
                <div class="form-group">
                    <label>เบอร์โทร:</label>
                    <input type="text" class="form-control"  name="tel" value="{{isset($customer)?$customer->tel:''}}">
                </div>
                @if($shop_button)
                <button type="submit" class="btn btn-primary">บันทึก</button>
                @endif
            </form>
            </table>
        </div>
    </div>