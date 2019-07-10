<?php

namespace App\BackofficeModules\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB; 
use MyConst;
use MyResponse;

class LoginController extends Controller
{
    public function login()
    {
    	return view('log::login');
    }
    public function action(Request $request)
    {
       $username = $request->get('username');
       $password = $request->get('password');
       $remember = $request->get('remember');
       if(empty($username)){
           return   MyResponse::error('กรุณาป้อน username ก่อนค่ะ');
       }
       if(empty($password)){
        return   MyResponse::error('กรุณาป้อน password ก่อนค่ะ');
    }
    }
    
}