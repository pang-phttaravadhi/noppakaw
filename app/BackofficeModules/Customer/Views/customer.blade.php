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
                            <label for="email">ชื่อ-นามสกุลลูกค้า</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">เบอร์โทร</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <button type="submit" class="btn btn-default">ค้นหา</button>
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">สถานะการจัดส่งสินค้า</div>
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