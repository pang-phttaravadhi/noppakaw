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
        ->get();
         
        return view('his::History',compact('customers','payments'));
    }
    public function historyfrom()
    {
            $customer= CurrentUser::user();
            $products = DB ::table('shopping_cart')
            ->select('shopping_cart.*','product.pro_name','product.price','product.image','product.weight')
            ->leftJoin('product','shopping_cart.pro_id','product.pro_id')
            ->whereNull('shopping_cart.deleted_at')
            ->where('shopping_cart.cust_id',$customer->cust_id)
            ->get();
    
            $shopping_cart = DB ::table('shopping_cart')
            ->select( DB::raw('SUM(amount) as total_amount'), DB::raw('SUM(price_per_unit*amount) as total_price'))
            ->where('cust_id',$customer->cust_id)
            ->first();
            $discount=0;
            $shipping=0;
            $price_net=0;
            if($shopping_cart->total_price>5000){
                $discount=$shopping_cart->total_price*0.20;
            }elseif($shopping_cart->total_price>2500){
                $discount=$shopping_cart->total_price*0.10;
            }elseif($shopping_cart->total_price>2000){
                $discount=$shopping_cart->total_price*0.05;
            }
            $total_weight=0;
            foreach($products as $pro){
                $total_weight+=$pro->weight;
            }
            if($total_weight>800){
                $shipping=200;
            }elseif($total_weight>500){
                $shipping=100;
            }elseif($total_weight>400){
                $shipping=60;
            }
            $price_net=($shopping_cart->total_price-$discount)+$shipping;
            
            return view('shopp::shopping-cart-product',compact('shopping_cart','shipping','discount','price_net','products'));
        
        //return view('hisfrom::Historyfrom',compact('shopping_cart','shipping','discount','price_net','products'));
    	
    }
}