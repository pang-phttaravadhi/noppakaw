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
        ->leftJoin('product','order_details.pro_id','product.pro_id')
        ->leftJoin('customer','orders.cust_id','customer.cust_id')
        ->whereNull('orders.deleted_at')
        ->get();
          //print_r($orders);exit;
        return view('pay::payment',compact('orders'));

    }
    public function paymentfrom(Request $request)
    {
      
    	return view('pay::paymentfrom');
    	
    }
    public function show($detail_id,Request $request)
    {   
        if(is_numeric($detail_id))
        {
            $orders = DB::table('order_details')->where('detail_id',$detail_id)->first();
            if(!empty($orders))
            {
                return view('pay::paymentfrom',[
                    'orders'=>$orders
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/payment',
        ]);
    }
    public function update($detail_id,Request $request)
    {
        if(is_numeric($detail_id))
        {
            $order_id  = $request->get('order_id');
            $pro_id   = $request->get('pro_id');
            $amount   = $request->get('amount');
            $price_per_unit  = $request->get('price_per_unit');
            $total_price   = $request->get('total_price');
            

            if(!empty($order_id) && is_numeric($pro_id) &&  is_numeric($amount) 
            &&  is_numeric($price_per_unit) &&  is_numeric($total_price))
            {
                $orders = DB ::table('orders')
                ->where('cate_id',$cate_id)
                ->where('cate_name',$cate_name)
                ->whereNull('deleted_at')->first();
                if(!empty($category)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('order_details')
                ->where('detail_id',$detail_id)
                ->update([
                    'order_id' =>$order_id,
                    'pro_id' =>$pro_id,
                    'amount' =>$amount,
                    'price_per_unit' =>$price_per_unit,
                    'total_price' =>$total_price,
                    'updated_at' =>date('Y-m-d H:i:s'),
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/payment');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }

        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
    
    public function destroy($id)
    {
        if(is_numeric($id))
        {
        DB::table('orders')->where('order_id',$id)->update([
            'deleted_at'=>date('Y-m-d H:i:s'),
        ]);
        return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
    
   
}
      