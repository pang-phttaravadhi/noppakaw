<?php

namespace App\LiffModules\Paymentliff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use stdClass;
use App\Services\MyResponse;
use App\Services\CurrentUser;

class PaymentliffController extends Controller
{
    public function index()
    {
        $customer= CurrentUser::user();
        $payments = DB ::table('orders')
        ->select('orders.*')
        ->first();
        // print_r($payments);exit;
        return view('payy::Paymentliff',compact('payments','customer'));
    }
    public function  paymentlifffrom()
    {
        $customer= CurrentUser::user();
        $payments = DB ::table('orders')
        ->select('orders.*','bank.bank_id','bank.image','bank.bank_name')
        ->leftJoin('bank','orders.bank_id','bank.bank_id')
        ->leftJoin('payment','orders.order_id','payment.order_id')
        ->orderBy('orders.order_id','desc')
        ->first();
        // print_r($payments);exit;
        return view('payyfrom::paymentlifffrom',compact('payments','customer'));
    }

    public function store($order_id,Request $request)
    {
        
            $bank_id = $request->get('bank_id');
            $pay_date = $request->get('pay_date');
            $price_net = $request->get('price_net');
            $image = $request->get('image');
            if(!empty($bank_id) 
            && !empty($pay_date) 
            && !empty($price_net) 
            && !empty($image) 
            )
            {
                DB::table('payment')->insert([
                    'order_id' =>$order_id,
                    'bank_id' =>$bank_id,
                    'pay_date'=>$pay_date,
                    'price_net'=>$price_net,
                    'image'=>$image,
                    'created_at'=>date('Y-m-d H:i:s'),
                ]);
                DB::table('orders')
                ->where('order_id',$order_id)->update([
                    'status'=>'ชำระเงินแล้ว'
                ]);
                // 'ใบสั่งซื้อใหม่','ใบสั่งซื้อรอชำระเงิน','ใบสั่งซื้อชำระเงินแล้ว','ใบสั่งซื้อส่งสินค้าแล้ว','ใบสั่งซื้อได้รับสินค้าแล้ว'
               
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/liff/history');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }

    }
    // public function show($pay_id,Request $request)
    // {   
    //     if(is_numeric($pay_id))
    //     {
    //         $payments = DB::table('payment')->where('pay_id',$pay_id)->first();
    //         if(!empty($payments))
    //         {
    //             $action='/payment'.$pay_id;
    //             $bank_type= DB::table('bank')->whereNull('deleted_at')->get();                
    //             return view('payyfrom::paymentlifffrom',compact('payments','customer'),[
    //                 'payment'=>$payments,
    //                 'action'=>$action,
    //                 'bank'=>$bank_type
    //             ]);
    //         }
    //     }
    //     return view('data-not-found',[
    //         'back_url'=>'/paymentlifffrom',
    //     ]);
    // }
    // public function update($pay_id,Request $request)
    // {
    //     if(is_numeric($pay_id))
    //     {
    //         $order_id = $request->get('order_id');
    //         $price_net = $request->get('price_net');

    //         if(!empty($price_net) 
    //         && is_numeric($order_id) 
    //         && !empty($detail) 
    //         )
           
    //             $payments = DB ::table('payment')
    //             ->where('pay_id',$pay_id)
    //             ->where('bank_type',$bank_type)
    //             ->whereNull('deleted_at')->first();
    //             if(!empty($payments)){
    //                 return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
    //             }
    //             DB::table('payment')->where('pay_id',$pay_id)->update([
    //                 'order_id' =>$order_id,
    //                 'price_net' =>$price_net,
    //                 'updated_at'=>date('Y-m-d H:i:s')
    //             ]);
    //             return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/paymentlifffrom');
    //         }else{ 
    //             return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
    //         }
    //     }
}