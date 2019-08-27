@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
  <div class="col-md-10">
      <div class="panel panel-default">
          <div class="panel-heading">สถานะใบสั่งซื้อ</div>
          <div class="panel-body">
              <table class="table table-striped">
                  <thead>
                    <input type="radio" name="status" value="status">รอการชำระเงิน<br>
                      <input type="radio" name="status" value="status">ชำระเงินแล้ว<br>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="/payment" class="btn btn-info">กลับ</a>
                  </thead>
              </table>
          </div>
      </div>
  </div>
</div>




<!-- <div class="container">
    <a herf="/payment"กลับ></a>
    <div class="panel panel-default" style="font-size:40x;">

      <h1>สถานะ</h1>
        <input type="radio" name="status" value="status">รอการชำระเงิน<br>
        <input type="radio" name="status" value="status">ชำระเงินแล้ว<br>
          <button type="submit" class="btn btn-primary">บันทึก</button>
          <a href="/payment" class="btn btn-info">กลับ</a>
    </form>
    </div>
</div> -->


       
@endsection
@push('scripts')
<script>
function uploaded(result,el){
$('#image').val(result.url);
$('#display-image').attr('src',result.url);
}
</script>
@endpush