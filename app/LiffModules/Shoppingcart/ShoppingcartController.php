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
    private function product_list()
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
    }

    private function shipping_list($shop_button=true)
    {
        $customer= CurrentUser::user();
        return view('shopp::shopping-cart-shipping' ,compact('customer','shop_button'));
    }

    public function index(Request $request)
    {
        $customer= CurrentUser::user();
        $product_list_html = $this->product_list();   
    	return view('shopp::shoppingcart',compact('product_list_html','customer'));
    }
    public function shipping(Request $request)
    {
        $customer= CurrentUser::user();
        $shipping_html = $this->shipping_list();
    	return view('shopp::shoppingcartfrom' ,compact('shipping_html'));
    }
    
    public function shipping_save($cust_id,Request $request)
    {
        $customer= CurrentUser::user();
        $cust_name  = $request->get('cust_name');
        $address    = $request->get('address');
        $tel        = $request->get('tel');
        if(!empty($cust_name) && !empty($address) && !empty($tel))
         {
           DB::table('customer')->where('cust_id',$customer->cust_id)->update([
                'cust_name' =>$cust_name,
                'address' =>$address,
                'tel' =>$tel,
            ]);
            return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/liff/shoppingcart-confirm');
        }else{
            return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
        }

    }
    public function confirm(Request $request)
    {
        $product_list_html = $this->product_list();
        $shipping_html = $this->shipping_list(false);

    	return view('shopp::shoppingcartconfirm', compact('product_list_html','shipping_html'));
    }

    public function order_save(Request $request)
    {
       
        //ดึงรายการสินค้าจากตะักร้าสินค้าที่ลูกค้าเลือกไว้
        $customer= CurrentUser::user();
        // $order_id=$request->get('order_id');
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
         $price=0;
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
         
        //บันทึกข้อมุลลงที่ table orders 
        $order_id=DB ::table('orders')
        ->insertGetId([
           'cust_id' =>$customer->cust_id,
           'transport_price' =>$shipping,
           'price_net' =>$price_net,
           'total_price' =>$shopping_cart->total_price,
           'amount' =>$shopping_cart->total_amount,
           'discount' =>$discount,
           'status' =>'สั่งซื้อใหม่',

           'created_at'=>date('Y-m-d H:i:s'),
         
       ]);

        //บันทึกรายการสินค้าลงที่ table order details 
        foreach($products as $index => $pro) 
        {
             DB ::table('order_details')
            ->insert([
               'order_id' =>$order_id,
               'pro_id' =>$pro->pro_id,
               'price_per_unit' =>$pro->price,
               'total_price' =>($pro->price*$pro->amount),
               'amount' =>$pro->amount,
               'created_at'=>date('Y-m-d H:i:s'),
           ]);
        }  


        

        //ลบรายการสินค้าออกจาก table shopping_cart 
        DB::table('shopping_cart')
        ->where('cust_id',$customer->cust_id)
        ->delete();

        //พาไปหน้า thank you 
    
        return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/liff/thankyou');
    }
    public function destroy($cust_id)
    {
        $customer= CurrentUser::user();
        if(is_numeric($cust_id))
        {
            DB::table('shopping_cart')
            ->where('cust_id',$cust_id)
            ->update([
                'deleted_at'=>date('Y-m-d H:i:s'),
            ]);
            return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }

    public function thankyou()
    {
        return view('shopp::thankyou');
    }


    public function add($pro_id)
    { 
        $customer= CurrentUser::user();
        file_put_contents(__DIR__.'/debug.txt','xxx');
        $product = DB ::table('product')
        ->where('pro_id',$pro_id)
        //->where('shopping_cart.cust_id',$customer->cust_id) 
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

    public function delete($pro_id)
    {
        if(is_numeric($pro_id))
        {
            $customer= CurrentUser::user();
            DB::table('shopping_cart')
            ->where('pro_id',$pro_id)
            ->where('cust_id',$customer->cust_id)
            ->delete();
            return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
    }           
}

    
    
    

    



    
    
    

    

