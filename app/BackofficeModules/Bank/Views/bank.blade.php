@extends('custom-layout')
@section('title')
@section('content' )
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">ค้นหา</div>
                <div class="panel-body">
                    <form action="/bank">
                        <div class="form-group">
                            <label>ชื่อธนาคาร</label>
                            <input type="text" class="form-control"  name="keyword" value="{{Input::get('keyword')}}">
                        </div>
                        <button type="submit" class="btn btn-info">ค้นหา</button>
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">ธนาคาร
                <a class="btn btn-default pull-right" href="/bank/create" style="padding-top:2px; padding-bottom:2px; "><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อธนาคาร</th>
                                <th>ประเภท</th>
                                <th>เลขบัญชี</th>
                                <th>ชื่อบัญชี</th>
                                <th>แก้ไขรายการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($banks as $index=> $bank)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$bank->bank_name}}</td>
                                <td>{{$bank->bank_type}}</td>
                                <td>{{$bank->bank_num}}</td>
                                <td>{{$bank->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="/bank/{{$bank->bank_id}}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default deleted-item" href="/bank/{{$bank->bank_id}}"><i class="fa fa-trash"></i></a>
                                    </div> 
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                        
                    </table>
                    {!! $banks->render()!!}
                </div>
            </div>
        </div>
    </div>  
</div>




@endsection