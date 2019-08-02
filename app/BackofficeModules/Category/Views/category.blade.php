@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
              
                <div class="panel-body">
                    <form action="/category">
                        <div class="form-group">
                            <label>หมวดสินค้า</label>
                                <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <button type="submit" class="btn btn-info">ค้นหา</button>
                    </form>
                </div>
            </div>
            <a href='/category/create' class="btn btn-primary">เพิ่มหมวดสินค้า</a>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">หมวดสินค้า</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>หมวดสินค้า</th>
                                <th style="width:110px">แก้ไขรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $index=> $row)
                            <tr>
                                <td>{{$index+$category->firstItem()}}</td>
                                <td>{{$row->cate_name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="/category/{{$row->cate_id}}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default deleted-item" href="/category/{{$row->cate_id}}"><i class="fa fa-trash"></i></a>
                                    </div> 
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!$category->render()!!}
                </div>
            </div>
        </div>
    </div>  
</div>



@endsection
