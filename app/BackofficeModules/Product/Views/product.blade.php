@extends('custom-layout')
@section('title','รายการสินค้า')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/product">
                        <div class="form-group">
                            <label>ชื่อสินค้า</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <div class="form-group">
                            <label>หมวดสินค้า</label>
                            <select name="cate_id">
                                <option value="all">
                                    ทั้งหมด
                                </option>
                                @foreach($category as $index=> $row)
                                <option value="{{$row->cate_id}}" {{Input::get('cate_id')==$row->cate_id?'selected':''}}>
                                {{$row->cate_name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">ค้นหา</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <a class="btn btn-info" href="/product/create">เพิ่มสินค้าใหม่</a>
            </div>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">ชื่อสินค้า</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>ชื่อสินค้า</th>
                                <th>หมวดสินค้า</th>
                                <th>ราคาสินค้า</th>
                                <th style="width:100px">แก้ไขรายการ</th>
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
