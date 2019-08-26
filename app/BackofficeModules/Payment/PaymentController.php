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
        
        $orders = DB ::table('order_details')
        ->select('order_details.*','customer.cust_name','customer.address'
        ,'orders.discount','orders.transport_price','orders.price_net','product.pro_name')
        ->leftJoin('orders','order_details.order_id','orders.order_id')
        ->leftJoin('product','order_details.order_id','orders.order_id')
        ->leftJoin('customer','orders.cust_id','customer.cust_id')
        ->whereNull('orders.deleted_at')
        ->get();
          
        return view('pay::payment',compact('orders'));
        //return view('pay::payment');
    }
    public function paymentfrom(Request $request)
    {
      
    	return view('payfrom::paymentfrom');
    	
    }
    
   
}
      