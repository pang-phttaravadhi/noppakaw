<?php

namespace App\LiffModules\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Services\CurrentUser;
use App\Services\MyResponse;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $customer= CurrentUser::user();
        $customers = DB ::table('customer')
        ->select('customer.*')
        ->get();
      //print_r($customers);exit;
    	return view('proo::profile',compact('customers','customer'));
    }
     public function profilefrom($cust_id,Request $request)
    {
        $customer= CurrentUser::user();
        if(is_numeric($cust_id))
        {
            return view('proofrom::profilefrom',compact('customer'));
        }
    }
    public function show($cust_id,Request $request)
    {   
        if(is_numeric($cust_id))
        {
            $customers = DB::table('customer')
            ->where('cust_id',$cust_id)
            ->first();
            if(!empty($customers))
            {
                return view('proofrom::profilefrom',[
                    'customers'=>$customers
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/profile',
        ]);
    }
    public function update($cust_id,Request $request)
    {
        if(is_numeric($cust_id))
        {
            $cust_name  = $request->get('cust_name');
            $address  = $request->get('address');
            $tel = $request->get('tel');
            DB::table('customer')
            ->where('cust_id',$cust_id)
            ->update([
                'cust_name' =>$cust_name,
                'address' =>$address,
                'tel' =>$tel,
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
        
            return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/liff/profile');
        }else{ 
            return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
        }
    }
}
