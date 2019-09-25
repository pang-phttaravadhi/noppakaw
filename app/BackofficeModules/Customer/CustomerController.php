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
        $keyword = $request->get('keyword');

        $customer= CurrentUser::user();
        $customers = DB ::table('customer')
        ->select('customer.*');
        if(!empty($keyword))
        {
            $customers->where('cust_name','LIKE','%'.$keyword.'%')
                        ->orwhere('tel','LIKE','%'.$keyword.'%');
        }
        $customers = $customers->paginate(10);
    	return view('cus::customer',compact('customers','customer'));
    
    }
    
}