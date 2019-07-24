<?php

namespace App\BackofficeModules\Payment;

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
        $pay_id = $request->get('pay_id');
        $keyword = $request->get('keyword');
        $payment = DB ::table('payment')
        ->select('payment.*','payment.pay_id')
        ->leftJoin('customer','payment.cust_name','customer.cust_name')
        ->leftJoin('customer','payment.address','customer.address')
        ->leftJoin('customer','payment.tel','customer.tel')
        ->leftJoin('product','payment.pro_name','product.pro_name')
        ->leftJoin('product','payment.price','product.price')
        ->whereNull('payment.deleted_at');
        
        if(!empty($keyword))
        {
            $payment->where('pay_id','LIKE','%'.$keyword.'%');
        }
        if(is_numeric($pay_id))
        {
            $payment->where('payment.pay_id','=',$pay_id);
        }
        $payment = $payment->orderBy('payment.price','desc')->orderBy('payment.pro_name','desc')->paginate(30);
        $payment= DB::table('payment')->whereNull('deleted_at')->get();
        return view('pay::payment',compact('payment'));
    }
    public function create()
    {
        $payment= DB::table('payment')->whereNull('deleted_at')->get();
        return view('pay::paymentfrom');
    }
    public function store(Request $request)
    {
        $cust_name = $request->get('cust_name');
        $address = $request->get('address');
        $tel = $request->get('tel');
        $pro_name = $request->get('pro_name');
        $price = $request->get('price');
        $amount = $request->get('amount');
        $delvfe = $request->get('delvfe');
        $count = $request->get('count');
        $net = $request->get('net');
        $status = $request->get('status');
        $parcel = $request->get('parcel');

      
            if(!empty($cust_name) && !empty($address) && !empty($tel) 
            && !empty($pro_name) && !empty($price) && !empty($amount) && !empty($delvfe) && !empty($count) 
            && !empty($net) && !empty($status) && !empty($parcel))
            {
                DB::table('payment')->insert([
                    'cust_name' =>$cust_name,
                    'address ' =>$address,
                    'tel' =>$tel,
                    'pro_name' =>$pro_name,
                    'price' =>$price,
                    'amount' =>$amount,
                    'delvfe' =>$delvfe,
                    'count' =>$count,
                    'net' =>$net,
                    'payment' =>$payment,
                    'status' =>$status,
                    'parcel' =>$parcel
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
                $payment= DB::table('payment')->whereNull('deleted_at')->get();                
                return view('pay::paymentfrom',[
                    'payment'=>$payment,
                    'action'=>$action,
                    'cust_name' =>$cust_name,
                    'address ' =>$address,
                    'tel' =>$tel,
                    'pro_name' =>$pro_name,
                    'price' =>$price,
                    'amount' =>$amount,
                    'delvfe' =>$delvfe,
                    'count' =>$count,
                    'net' =>$net,
                    'status' =>$status,
                    'parcel' =>$parcel
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/payment',
        ]);
    }
    public function update($pay_id,Request $request)
    {
        if(is_numeric($pay_id))
        {
            $cust_name = $request->get('cust_name');
            $address = $request->get('address');
            $tel = $request->get('tel');
            $pro_name = $request->get('pro_name');
            $price = $request->get('price');
            $amount = $request->get('amount');
            $delvfe = $request->get('delvfe');
            $count = $request->get('count');
            $net = $request->get('net');
            $payment = $request->get('payment');
            $status = $request->get('status');
            $parcel = $request->get('parcel');
            

            if(!empty($pro_name) && is_numeric($cate_id)&& is_numeric($price))
            {
                DB::table('payment')->where('pay_id',$pay_id)->update([
                    'cust_name' =>$cust_name,
                    'address ' =>$address,
                    'tel' =>$tel,
                    'pro_name' =>$pro_name,
                    'price' =>$price,
                    'amount' =>$amount,
                    'delvfe' =>$delvfe,
                    'count' =>$count,
                    'net' =>$net,
                    'payment' =>$payment,
                    'status' =>$status,
                    'parcel' =>$parcel,
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/payment');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }

        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
    public function destroy($pay_id)
    {
        if(is_numeric($pay_id))
        {
            DB::table('payment')->where('pay_id',$pay_id)->update([
                'deleted_at'=>date('Y-m-d H:i:s'),
            ]);
            return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
}