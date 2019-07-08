<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body>
@yield('content')
        <form action="/action_page.php">
  <div class="form-group">
    <label for="email">รหัสสินค้า:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">ชื่อสินค้า:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">หมวดสินค้า:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">ราคาสินค้า:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">บันทึก</button>
</form>
</body>
</html>
