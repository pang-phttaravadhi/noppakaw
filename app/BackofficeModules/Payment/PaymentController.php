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
    public function Payment()
    {
        return view('paymentdetail::Payment');
    }
    public function index(Request $request)
    {   
        $keyword = $request->get('keyword');
        $order_id = $request->get('order_id');

        $payment = DB ::table('payment')
        ->select('payment.*','orders.cust_id')
        ->leftJoin('orders','payment.order_id','orders.order_id')
        ->whereNull('payment.deleted_at');
        
        if(!empty($keyword))
        {
            $payment->where('pay_id','LIKE','%'.$keyword.'%');
        }
        if(is_numeric($order_id)){
            $payment->where('payment.order_id','=',$order_id);
        }

        $payment = $payment->paginate(10);
        $orders = DB ::table('orders')->whereNull('deleted_at')->get();
        return view('paymentdetail::payment',compact('payment','orders'));
    }
    public function create()
    {
        return view('paymentdetail::paymentfrom');
    }
    public function store(Request $request)
    {
            $order_id = $request->get('order_id');
            $bank_account = $request->get('bank_account');
            $price = $request->get('price');
            $approved_status = $request->get('approved_status');
            // $image = $request->get('image');
            if(!empty($pay_id)  && !empty($bank_account) && !empty($price) && !empty($approved_status) && is_numeric($order_id))
            {
                DB::table('payment')->insert([
                    'pay_id' =>$pay_id,
                    'order_id' =>$order_id,
                    'bank_account' =>$bank_account,
                    'price' =>$price,
                    'approved_status' =>$approved_status
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/payment');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }

    }


    public function show($pay_id,Request $request)
    {   
        if(is_numeric($pay_id))
        {
            $payment = DB::table('payment')->where('pay_id',$pay_id)->first();
            if(!empty($payment))
            {
                $action='/payment'.$pay_id;
                return view('paymentdetail::paymentfrom',[
                    'payment'=>$payment,
                    'action'=>$action
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/payment',
        ]);
    }
    public function update($order_id,Request $request)
    {
        if(is_numeric($pay_id))
        {
            $order_id = $request->get('order_id');
            $bank_account = $request->get('bank_account');
            $price = $request->get('price');
            $approved_status = $request->get('approved_status');
            // $image = $request->get('image');

            if(!empty($pay_id)  && !empty($bank_account) && !empty($price) && !empty($approved_status) && is_numeric($order_id))

            {
                DB::table('payment')->where('pay_id',$pay_id)->update([
                    'pay_id' =>$pay_id,
                    'order_id' =>$order_id,
                    'bank_account' =>$bank_account,
                    'price' =>$price,
                    'approved_status' =>$approved_status
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
        DB::table('payment')->where('pay_id',$id)->update([
            'deleted_at'=>date('Y-m-d H:i:s'),
        ]);
        return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
}
