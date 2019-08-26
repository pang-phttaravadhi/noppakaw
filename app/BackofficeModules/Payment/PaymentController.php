<?php

namespace App\BackofficeModules\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB; 

class PaymentController extends Controller
{   
    public function index(Request $request)
    {   
        $keyword = $request->get('keyword');
        $orders = DB ::table('orders')
        ->select('orders.*','customer.cust_name','customer.address')
        ->leftJoin('customer','orders.cust_name','customer.cust_name')
        ->leftJoin('customer','orders.address','customer.address')
        ->whereNull('orders.deleted_at');
        
        if(!empty($keyword))
        {
            $orders->where('order_id','LIKE','%'.$keyword.'%');
        }
        //print_r($orders);exit;
        
        return view('pay::payment',compact('orders'));
    }
    public function paymentfrom(Request $request)
    {
      
    	return view('payfrom::paymentfrom');
    	
    }
    
}
      