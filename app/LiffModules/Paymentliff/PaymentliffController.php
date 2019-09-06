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
        ->select('orders.*','bank.bank_type','bank.image')
        ->leftJoin('bank','orders.bank_id','bank.bank_id')
        ->orderBy('orders.order_id','desc')
        ->first();
        // print_r($payments);exit;
        return view('payyfrom::paymentlifffrom',compact('payments','customer'));
    }

    public function store(Request $request)
    {
            $bank_type = $request->get('bank_type');
            $status = $request->get('status');
            $image = $request->get('image');
            if(!empty($bank_type) 
            && !empty($status) 
            && !empty($image) 
            )
            {
                DB::table('payment')->insert([
                    'bank_type' =>$bank_type,
                    'status' =>$status,
                    'image'=>$image,
                    'created_at'=>date('Y-m-d H:i:s'),
                ]);
               
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/liff/paymentlifffrom');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }

    }
    public function show($pay_id,Request $request)
    {   
        if(is_numeric($pay_id))
        {
            $payments = DB::table('payment')
            ->where('pay_id',$pay_id)
            ->first();
            if(!empty($payments))
            {
                return view('payyfrom::Paymentlifffrom',[
                    'payment'=>$payments,
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/payment',
        ]);
    }
    // public function update($pay_id,Request $request)
    // {
    //     if(is_numeric($pay_id))
    //     {
    //         $bank_type  = $request->get('status');
    //         $status  = $request->get('status');
    //         $image = $request->get('image');
            

    //         if(!empty($status))
    //         {
    //             DB::table('payment')
    //             ->where('pay_id',$pay_id)
    //             ->update([
    //                 'status' =>$status,
    //                 'updated_at' =>date('Y-m-d H:i:s'),
    //             ]);
    //             if(!empty($bank_type)){
    //                 $banks = DB::table('bank')
    //                 ->where('bank_id',$bank_id)
    //                 ->first();
    //                 if(!$banks){
    //                     DB::table('bank')
    //                     ->insert([
    //                         'bank_id' =>$bank_id,
    //                         'bank_name' =>$bank_name,
    //                         'bank_num' =>$bank_num,
    //                         'bank_type' =>$bank_type,
    //                         'image ' =>$image,
    //                         'created_at' =>date('Y-m-d H:i:s'),
    //                         'updated_at' =>date('Y-m-d H:i:s')
    //                     ]);
    //                 }
    //             }
    //             return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/paymentliff');
    //         }else{ 
    //             return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
    //         }
    //     }

    //     return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    // }

}