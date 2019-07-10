<?php

namespace App\BackofficeModules\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class CustomerController extends Controller
{
    public function customer()
    {
    	return view('cus::customer');
    }
    
}