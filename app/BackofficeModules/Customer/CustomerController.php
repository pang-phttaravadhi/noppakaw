<?php

namespace App\BackofficeModules\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Services\CurrentUser;


class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customer= CurrentUser::user();
        $customers = DB ::table('customer')
        ->select('customer.*')
        ->get();
    	return view('cus::customer',compact('customers','customer'));
    
    }
    
}