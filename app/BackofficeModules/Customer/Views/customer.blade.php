@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/customer">
                        <div class="form-group">
                            <label>ชื่อ-นามสกุลลูกค้า</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <button type="submit" class="btn btn-info">ค้นหา</button>
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">ลูกค้า</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อ-นามสกุลลูกค้า</th>
                                <th>ที่อยู่</th>
                                <th>เบอร์โทร</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $index=> $cus)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$cus->cust_name}}</td>
                                <td>{{$cus->address}}</td>
                                <td>{{$cus->tel}}</td>
                                
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