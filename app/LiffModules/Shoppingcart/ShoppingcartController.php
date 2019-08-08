<?php

namespace App\LiffModules\Shoppingcart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class ShoppingcartController extends Controller
{
    public function index(Request $request)
    {
        $cust_id=$request->get('cust_id');
        $orders = DB ::table('orders')
        ->select('orders.*','customer.cust_name','product.pro_name','product.price','product.image')
        ->leftJoin('customer','orders.cust_id','customer.cust_id')
        ->leftJoin('product','orders.pro_id','product.pro_id')
        ->whereNull('orders.deleted_at');
        if(is_numeric($cust_id)){
            $orders ->where('orders.cust_id',$cust_id);
        }

        $orders = $orders->paginate(10);
    	return view('shopp::shoppingcart',compact('orders'));
    }
    public function shoppingcartfrom()
    {
    	return view('shopp::shoppingcartfrom');
    }
    public function shoppingcartfromm()
    {
    	return view('shopp::shoppingcartfromm');
    }
    public function add($pro_id)
    {   
        print_r($pro_id);exit();
     // select product by id

     // 1unit*price = amount

     // insert to shopping cart 
        
        return true;
    }
    
}
