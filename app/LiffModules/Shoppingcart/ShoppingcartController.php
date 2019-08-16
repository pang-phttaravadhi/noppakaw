<?php

namespace App\LiffModules\Shoppingcart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Services\CurrentUser;
use App\Services\MyResponse;
class ShoppingcartController extends Controller
{
    public function index(Request $request)
    {
        $customer= CurrentUser::user();
       
        $products = DB ::table('shopping_cart')
        ->select('shopping_cart.*','product.pro_name','product.price','product.image','product.weight')
        ->leftJoin('product','shopping_cart.pro_id','product.pro_id')
        ->whereNull('shopping_cart.deleted_at')
        //->where('shopping_cart.cust_id',$customer->cust_id)
        ->get();

        $shopping_cart = DB ::table('shopping_cart')
        ->select( DB::raw('SUM(amount) as total_amount'), DB::raw('SUM(price_per_unit*amount) as total_price'))
        //->where('cust_id',$customer->cust_id)
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

        $confirms = DB ::table('shopping_cart')
        ->select('confirm.*','product.pro_name','product.price','product.image','product.weight','cust_name','cust_address','cust_tel')
        ->leftJoin('shopping_cart','confirm.shopping_id','shopping_cart.shopping_id')
        ->leftJoin('customer','confirm.cust_id','customer.cust_id')
        ->whereNull('confirm.deleted_at')
        //->where('shopping_cart.cust_id',$customer->cust_id)
        ->get();
        
    	return view('shopp::shoppingcart',compact('shopping_cart','shipping','discount','price_net','products'));
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
        file_put_contents(__DIR__.'/debug.txt','xxx');
        $product = DB ::table('product')
        ->where('pro_id',$pro_id)
        ->first();
        $customer= CurrentUser::user();
        if(!empty($customer)){
            $shopping_cart= DB::table ('shopping_cart')
            ->where ('cust_id',$customer->cust_id)
            ->where ('pro_id','=',$pro_id)
            ->first();
            if(!empty($shopping_cart)){
                 DB::table ('shopping_cart')
                ->where ('cust_id',$customer->cust_id)
                ->where ('pro_id','=',$pro_id)
                ->update(['amount'=>$shopping_cart->amount+1
                ]);
            }
            else{
                DB::table ('shopping_cart')
                ->insert([
                    'pro_id' =>$pro_id,
                    'cust_id' =>$customer->cust_id,
                    'amount' =>1,
                    'price_per_unit' =>$product->price,
                    'created_at'=>date('Y-m-d H:i:s'),
                ]);
            }
            return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/shoppingcart');
        }else{
            return MyResponse::error('กรุณาloginก่อนค่ะ');
            }

        
    }
        
       
            
         // select product by id
    
         // 1unit*price = amount
    
         // insert to shopping cart 
        
    
        
        
        //return true;*/
}

    
    
    

    



    
    
    

    

