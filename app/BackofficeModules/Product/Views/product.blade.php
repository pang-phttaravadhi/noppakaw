@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label>รหัสสินค้า</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ชื่อสินค้า</label>
                            <input type="text" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-default">ค้นหา</button>
                    </form>
                </div>
            </div>
            <button type="submit" class="btn btn-info"><a href="/product/productfrom">เพิ่มสินค้าใหม่</a></button>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">สินค้า</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>หมวดสินค้า</th>
                                <th>ราคาสินค้า</th>
                                <th>รายละเอียดสินค้า</th>
                                <th style="width:110px">แก้ไขรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->pro_id}}</td>
                                <td>{{$product->pro_name}}</td>
                                <td>{{$product->cate}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->pro_det}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/product/{{$product->pro_id}}" class="btn btn-sm btn-primary">แก้ไข</a>
                                        <a class="btn btn-sm btn-primary">ลบ</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                   {!! $products->render() !!}
                </div>
            </div>
        </div>
    </div>  
</div>



@endsection
