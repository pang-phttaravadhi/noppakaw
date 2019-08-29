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
    	return view('proo::Profile',compact('customers','customer'));
    }
     public function profilefrom(Request $request)
    {
        $customer= CurrentUser::user();
        if(is_numeric('cust_id'))
        {
            $cust_name = $request->get('cust_name');
            $address = $request->get('address');
            $tel = $request->get('tel');
            $image = $request->get('image');

            if(!empty($cust_name) 
            && !empty($address) 
            && !empty($tel) 
            && !empty($image)
            )
            {
                $customers = DB ::table('customer')
                ->where('cust_id',$cust_id)
                ->where('cust_name',$cust_name)
                ->whereNull('deleted_at')->first();
                if(!empty($customer)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('customer')->where('cust_id',$cust_id)->update([
                    'cust_name' =>$cust_name,
                    'address' =>$address,
                    'tel' =>$tel,
                    'image'=>$image,
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/liff/profile');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }
       
    	return view('proofrom::Profilefrom',compact('cust_name','address','tel','image'));
    }
}
