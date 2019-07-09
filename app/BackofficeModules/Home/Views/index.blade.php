@extends('custom-layout')


@section('content' )
   

<div class="jumbotron text-center">
  <h1>ยินดีต้อนรับ</h1>
  <p>ร้านนพเกล้า</p> 
</div>
<div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
          <form class="form-signin">
              <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                  <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
                  </div>
                  <button type="button" class="btn btn-warning">Sign in</button>
          </form>
      </div>
      <div class="col-sm-2"></div>
    </div>
</div>


@endsection