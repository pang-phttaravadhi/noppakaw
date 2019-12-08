@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <a herf="/staff"กลับ></a>
      <div class="panel-heading" style="font-size:20px;"></div>
    @if(isset($staff))
      <form action="/staff/{{$staff->staff_id}}"  class="form-ajax" call_back='yes' method="PUT">
        <input type="hidden"value="put" name="_methods">
        @csrf()
    @else
      <form class="form-ajax" action="/staff" method="POST">
    @csrf()
    @endif
    <div class="form-group col-md-4">
      <label>ชื่อ-นามสกุลพนักงาน:</label>
        <input type="text" class="form-control"  name="first_name" value="{{ isset($staff) ? $staff->first_name:''}}">
    </div>
    <div class="form-group col-md-4">
      <label>ที่อยู่:</label>
        <input type="text" class="form-control"  name="address" value="{{ isset($staff) ? $staff->address:''}}">
    </div>
    <div class="form-group col-md-4">
      <label>เบอร์โทร:</label>
        <input type="text" class="form-control"  name="tel" value="{{ isset($staff) ? $staff->tel:''}}">
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>
    <a href="/staff" class="btn btn-info">กลับ</a>   
  </form>
</div>

@endsection
       
