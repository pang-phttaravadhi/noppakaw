<?php

namespace App\BackofficeModules\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB; 
use App\Services\MyResponse;
class PaymentController extends Controller
{   
    public function index(Request $request)
    {   
        $keyword = $request->get('keyword');
        $cust_id = $request->get('cust_id');
        $order_id = $request->get('order_id');
        $orders = DB ::table('orders')
        ->select('orders.*','customer.cust_name','order_details.amount','order_details.price_per_unit','order_details.detail_id')
        ->leftJoin('customer','orders.cust_id','customer.cust_id')
        ->leftJoin ('order_details','orders.detail_id','order_details.detail_id')
        ->whereNull('orders.deleted_at');
        
        if(!empty($keyword))
        {
            $orders->where('order_id','LIKE','%'.$keyword.'%');
        }
        if(is_numeric($cust_id))
        {
            $orders->where('orders.cust_id','=',$cust_id);
        }
        if(is_numeric($detail_id))
        {
            $orders->where('orders.detail_id','=',$detail_id);
        }

        $orders = $orders->paginate(10);
        $customer= DB ::table('customer')->whereNull('deleted_at')->get();
        $order_details= DB ::table('order_details')->whereNull('deleted_at')->get();
        return view('paymentfrom::payment',compact('orders','customer','order_details'));
    }
    public function create()
    {
        $customer= DB::table('customer')->whereNull('deleted_at')->get();
        $order_details= DB ::table('order_details')->whereNull('deleted_at')->get();
        return view('payment::paymentfrom',compact('customer','order_details'));
    }
    public function store(Request $request)
    {
            $order_id = $request->get('order_id');
            $cust_id = $request->get('cust_id');
            $order_id = $request->get('order_id');
            // $image = $request->get('image');
            if(!empty($order_id)  && !empty($cust_id) && !empty($detail_id))
            {
                $orders= DB::table('orders')
                ->where('order_id',$order_id)
                ->whereNull('orders.deleted_at')->first();
                if(!empty($orders))
                {
                    return MyResponse::error('ขออภัยข้อมูลนี้มีในระบบอยู่แล้ว');
                }
                DB::table('order')->insert([
                    'order_id' =>$order_id,
                    'detail_id' =>$detail_id,
                    'cust_id' =>$cust_id
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/payment');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }

    }
    public function show($order_id,Request $request)
    {   
        if(is_numeric($order_id))
        {
            $orders = DB::table('orders')->where('order_id',$order_id)->first();
            if(!empty($orders))
            {
                $customer= DB ::table('customer')->whereNull('deleted_at')->get();
                $order_details= DB ::table('order_details')->whereNull('deleted_at')->get();
                return view('payment::paymentfrom',[
                    'orders'=>$orders,
                    'detail_id' =>$detail_id,
                    'cust_id' =>$cust_id
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/payment',
        ]);
    }
    public function update($order_id,Request $request)
    {
        if(is_numeric($order_id))
        {
            $order_id = $request->get('order_id');
            $cust_id = $request->get('cust_id');
            $detail_id = $request->get('detail_id');
            // $image = $request->get('image');

            if(!empty($order_id) && !empty($cust_id_id) && !empty($detail_id))
            {
                
                DB::table('orders')->where('order_id',$order_id)->update([
                    'order_id' =>$order_id,
                    'cust_name' =>$cust_name,
                    'address' =>$address,
                    'amount' =>$amount
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/payment');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }

        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
    public function destroy($order_id)
    {
        if(is_numeric($order_id))
        {
        DB::table('orders')->where('order_id',$order_id)->update([
            'deleted_at'=>date('Y-m-d H:i:s'),
        ]);
        return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
}
