<?php

namespace App\LiffModules\History;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Services\CurrentUser;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $customer= CurrentUser::user();
        $payments = DB ::table('payment')
        ->select('payment.*','orders.status')
        ->leftJoin('orders','payment.order_id','orders.order_id')
        ->where('orders.cust_id',$customer->cust_id)
        ->get();
         
        return view('his::history',compact('customers','payments'));
    }
    public function historyfrom($order_id)
    {
        $customer= CurrentUser::user();
        $products = DB ::table('order_details')
        ->select('order_details.*','product.pro_name','product.price','product.image'
        ,'product.weight')
        ->leftJoin('product','order_details.pro_id','product.pro_id')
        ->whereNull('order_details.deleted_at')
        ->where('order_details.order_id',$order_id)
        ->get();
        $order = DB ::table('orders')
        ->leftJoin('delivery','orders.order_id','delivery.order_id')
        ->where('orders.cust_id',$customer->cust_id)
        ->where('orders.order_id',$order_id)
        ->first();

       
        $transport_number=$order->transport_number;
        $discount=$order->discount;
        $shipping=$order->transport_price;
        $price_net=$order->price_net;
        $total_weight=0;
        foreach($products as $pro){
            $total_weight+=$pro->weight;
        }
        
    	return view('hisfrom::historyfrom',compact('shipping','discount','price_net','products','transport_number','customer','order'));
        // $customer= CurrentUser::user();
        // $order= DB::table('order_details')
        // ->select('order_details.*','product.pro_name','product.price'
        // ,'product.image','orders.discount','orders.transport_price','orders.price_net')
        // ->leftJoin('product','order_details.pro_id','product.pro_id')
        // ->leftJoin('orders','order_details.order_id','orders.order_id')
        // ->get();
        // $or= DB::table('orders')
        // ->select('orders.*')
        // ->get();

        // // print_r($order);exit;
       
        
        //    return view('hisfrom::Historyfrom',compact('order','customer','or'));
    }
}