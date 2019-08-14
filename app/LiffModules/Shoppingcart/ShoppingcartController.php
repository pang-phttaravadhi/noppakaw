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
        $cust_id=$request->get('cust_id');
        $orders = DB ::table('orders')
        ->select('orders.*','customer.cust_name','product.pro_name','product.price','product.image','shopping_cart.shopping_id')
        ->leftJoin('customer','orders.cust_id','customer.cust_id')
        ->leftJoin('product','orders.pro_id','product.pro_id')
        ->rightJoin('shopping_cart','shopping_cart.pro_id','product.pro_id')
        ->whereNull('shopping_cart.deleted_at')
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
        file_put_contents(__DIR__.'/debug.txt','xxx');
        $product = DB ::table('product')
        ->where('pro_id',$pro_id)
        ->first();
        $customer= CurrentUser::user();
        if(!empty($customer)){
            $shopping_cart= DB::table ('shopping_cart')
            ->where ('user_id',$customer->cust_id)
            ->where ('pro_id','=',$pro_id)
            ->first();
            if(!empty($shopping_cart)){
                 DB::table ('shopping_cart')
                ->where ('user_id',$customer->cust_id)
                ->where ('pro_id','=',$pro_id)
                ->update(['amount'=>$shopping_cart->amount+1
                ]);
            }
            else{
                DB::table ('shopping_cart')
                ->insert([
                    'pro_id' =>$pro_id,
                    'user_id' =>$customer->cust_id,
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

    
    
    

    

