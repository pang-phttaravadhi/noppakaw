@extends('custom-layout')
@section('title','รายการสินค้า')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/product">
                        <div class="form-group">
                            <label for="keyword">รหัสสินค้า</label>
                            <input type="text" name="keyid" value="{{Input::get('keyid')}}" class="form-control">
                        </div>  
                            <label>ชื่อสินค้า</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                            <button type="submit" class="btn btn-info"><a href="/product/productfrom">ค้นหา</a></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-info"><a href="/product/create">เพิ่มสินค้าใหม่</a></button>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">สินค้า</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>ชื่อสินค้า</th>
                                <th>หมวดสินค้า</th>
                                <th>ราคาสินค้า</th>
                                <th style="width:110px">แก้ไขรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $index=> $product)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$product->pro_name}}</td>
                                <td>{{$product->cate_name}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <div class="btn-group">
                                    <a class="btn btn-default" href="/product/{{$product->pro_id}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-default deleted-item" href="/product/{{$product->pro_id}}"><i class="fa fa-trash"></i></a>
                                    </div> 
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
