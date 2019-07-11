@extends('custom-layout')
        @section('title')
        @section('content' )
<div class="container">
    <div class="col-md-10">
        <div class="form-group">
            <label for="email">หมวดสินค้า:</label>
            <input type="email" class="form-control" id="email">
            <label for="email">รายละเอียด:</label>
            <input type="email" class="form-control" id="email">
            <button type="button" class="btn btn-primary">บันทึก</button>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info"><a href="/category/">กลับ</a></button>

@endsection