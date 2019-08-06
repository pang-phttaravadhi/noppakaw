<?php

namespace App\LiffModules\Paymentliff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use stdClass;
use App\Services\MyResponse;

class PaymentliffController extends Controller
{
    public function index()
    {
        return view('payy::Paymentliff');
    	
    }
    public function paymentlifffrom()
    {
        return view('payyfrom::Paymentlifffrom');
    	
    }
    public function update($pay_id,Request $request)
    {
        if(is_numeric($pay_id))
        {
            $order_id = $request->get('order_id');
            $created_at = $request->get('created_at');
            $bank_type = $request->get('bank_type');
            $price_net = $request->get('price_net');
            $image = $request->get('image');

            if(!empty($order_id) 
            && !empty($image) 
            && is_numeric( $created_at) 
            && is_numeric($bank_type) 
            && is_numeric($price_net) 
            )
            {
                $payments = DB ::table('payment')
                ->select('payment.*','orders.order_id','order.price_net')
                ->leftJoin('orders','payment.order_id','orders.order_id')
                ->leftJoin('orders','payment.price_net','orders.price_net')
                ->where('order_id',$order_id)
                ->where('price_net',$price_net)
                ->whereNull('payment.deleted_at')->first();
                if(!empty($payment)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('payment')->where('pay_id',$pay_id)->update([
                    'order_id' =>$order_id,
                    'created_at' =>$created_at,
                    'bank_type' =>$bank_type,
                    'price_net'=>$price_net,
                    'image'=>$image,
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/payment');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
    
}


