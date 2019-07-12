@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="col-md-10">
        <div class="form-group">
            <label for="email">หมวดสินค้า:</label>
            <input type="email" class="form-control" id="email">
                <h2>ใส่รูปภาพ</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="http://i.lnwfile.com/u4s2kd.png" target="_blank">
                                    <img src="http://i.lnwfile.com/u4s2kd.png" alt="Lights" style="width:100%">
                                </a>
                            </div>
                        </div>
                    </div>    
                    <button type="button" class="btn btn-primary">บันทึก</button>
                    <button type="submit" class="btn btn-info"><a href="/category/">กลับ</a></button>
        </div>
    </div>
    
</div>

@endsection