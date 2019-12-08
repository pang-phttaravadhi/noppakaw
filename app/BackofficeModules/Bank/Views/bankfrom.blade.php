@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/bank"กลับ></a>
      <div class="panel-heading" style="font-size:20px;"></div>
    @if(isset($bank))
      <form action="/bank/{{$bank->bank_id}}"  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
        @csrf()
    @else
      <form class="form-ajax" action="/bank" method="POST">
    @csrf()
    @endif
    <div class="form-group col-md-2">
      <label>ชื่อธนาคาร:</label>
        <input type="text" class="form-control"  name="bank_name" value="{{ isset($bank) ? $bank->bank_name:''}}">
    </div>
    <div class="form-group col-md-2">
      <label>ประเภท:</label>
        <input type="text" class="form-control"  name="bank_type" value="{{ isset($bank) ? $bank->bank_type:''}}">
    </div>
    <div class="form-group col-md-2">
      <label>เลขบัญขี:</label>
        <input type="text" class="form-control"  name="bank_num" value="{{ isset($bank) ? $bank->bank_num:''}}">
    </div>
    <div class="form-group col-md-2">
      <label>ชื่อบัญชี:</label>
        <input type="text" class="form-control"  name="name" value="{{ isset($bank) ? $bank->name:''}}">
    </div>
    

      <h3>ใส่รูปภาพ</h3>
      <div class="row">
        <div class="col-md-4">
          <button type="button" data-callback="uploaded" data-ext="jpg,png,jpeg" class="btn btn-primary upload">อัพโหลดรูปภาพ</button>
          <input type="hidden" value="{{ isset($bank) ? $bank->image:''}}" name="image" id="image"/>
            <div class="thumbnail">
              <img src="{{ isset($bank) ? $bank->image:''}}" id="display-image" alt="Lights" style="width:100%">
            </div>
        </div>
      </div> 
      <button type="submit" class="btn btn-primary">บันทึก</button>
      <a href="/bank" class="btn btn-info">กลับ</a>   
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