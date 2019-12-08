@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/staff">
                        <div class="form-group">
                            <label>ชื่อพนักงาน</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <button type="submit" class="btn btn-info">ค้นหา</button>
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">พนักงาน
                    <a class="btn btn-default pull-right" href="/staff/create" style="padding-top:2px; padding-bottom:2px; "><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อ-นามสกุลพนักงาน</th>
                                <th>ที่อยู่</th>
                                <th>เบอร์โทร</th>
                                <th>แก้ไขรายยการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($staffs as $index=> $staff)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$staff->first_name}}</td>
                                <td>{{$staff->address}}</td>
                                <td>{{$staff->tel}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="/staff/{{$staff->staff_id}}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default deleted-item" href="/staff/{{$staff->staff_id}}"><i class="fa fa-trash"></i></a>
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