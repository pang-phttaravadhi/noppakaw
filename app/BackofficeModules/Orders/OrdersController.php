<?php

namespace App\BackofficeModules\orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB; 
use App\Services\MyResponse; 

class OrdersController extends Controller
{   
    public function index(Request $request)
    {   
        
        $orders = DB ::table('orders')
        ->select('orders.*','customer.cust_name','customer.address','customer.tel')
        ->leftJoin('customer','orders.cust_id','customer.cust_id')
        ->whereNull('orders.deleted_at')
        ->get();
          //print_r($orders);exit;
        return view('pay::orders',compact('orders'));

    }
    public function paymentfrom($order_id ,Request $request)
    {

        $shops = DB ::table('order_details')
        ->select('order_details.*',
        'product.pro_name')
        ->leftjoin('product','order_details.pro_id','product.pro_id')
        ->where('order_details.order_id',$order_id)
        ->whereNull('order_details.deleted_at')
        ->get();
        $order = DB ::table('orders')
        ->select('orders.*','customer.cust_name','customer.address','customer.tel','delivery.transport_number')
        ->leftJoin('customer','orders.cust_id','customer.cust_id')
        ->leftJoin('delivery','orders.order_id','delivery.order_id')
        ->where('orders.order_id',$order_id)
        ->whereNull('orders.deleted_at')
        ->first();
    //   print_r($orders);exit;
    	return view('pay::ordersfrom' ,compact('shops','order'));
    	
    }
    public function store(Request $request) 
    {
        $order_id = $request->get('order_id');
        $pro_id = $request->get('pro_id');
        $amount = $request->get('amount');
        $price_per_unit = $request->get('price_per_unit');
        $total_price = $request->get('total_price');
        $status = $request->get('status');

        if(!empty($order_id) && !empty($pro_id) && !empty($amount) && !empty($price_per_unit) && !empty($total_price) && !empty($status))
        {
                DB::table('order_details')->insert([
                    'order_id' =>$order_id,
                    'pro_id' =>$pro_id,
                    'amount' =>$amount,
                    'price_per_unit' =>$price_per_unit,
                    'total_price' =>$total_price,
                    'status' =>$status,
                    'created_at' =>date('Y-m-d H:i:s'),
                ]);
            return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/orders');
        }else{
            return MyResponse::error('กรุณาป้อนข้อมูลให้ครบ');
        }
    
    }
    public function show($detail_id,Request $request)
    {   
        if(is_numeric($detail_id))
        {
            $orders = DB::table('order_details')->where('detail_id',$detail_id)->first();
            if(!empty($orders))
            {
                return view('pay::ordersfrom',[
                    'orders'=>$orders
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/orders',
        ]);
    }
    public function update($order_id,Request $request)
    {
        if(is_numeric($order_id))
        {
            $status  = $request->get('status');
            $transport_number  = $request->get('transport_number');
            $transport_type = $request->get('transport_type');
            

            if(!empty($status))
            {
                DB::table('orders')
                ->where('order_id',$order_id)
                ->update([
                    'status' =>$status,
                    'updated_at' =>date('Y-m-d H:i:s'),
                ]);
                if(!empty($transport_number)){
                    $del = DB::table('delivery')
                    ->where('order_id',$order_id)
                    ->first();
                    if(!$del){
                        DB::table('delivery')
                        ->insert([
                            'transport_number' =>$transport_number,
                            'transport_type' =>$transport_type,
                            'order_id' =>$order_id,
                            'created_at' =>date('Y-m-d H:i:s'),
                            'updated_at' =>date('Y-m-d H:i:s')
                        ]);
                    }
                }
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/orders');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }

        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
    
}
      