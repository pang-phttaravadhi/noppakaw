@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="col-md-10">
        <div class="panel panel-default"> 
            <a herf="/category" กลับหน้าหลัก> </a>
            <div class="panel-heading">
                @if(isset($category))
                หมวดสินค้า :{{$category->cate_name}}
                @else
                เพิ่มหมวดสินค้า
                @endif
                </div>
                @if(isset($category))
                    <form action="/category/{{$category->cate_id}}" class="form-ajax" method="PUT">
                        <input type="hidden" value="put" name="_mathods">
                    @csrf()
                @else
                    <form class="form-ajax" action="/category" method="POST">
                @csrf()
                @endif
                <div class="panel-body">
                        
                    <input type="text" name="cate_name" class="form-control" value="{{isset($category)?$category->cate_name:''}}"/>
                        
                    </div> 
                    <button class="btn btn-primary">ยืนยัน</button>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection