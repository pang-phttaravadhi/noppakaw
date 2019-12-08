<?php

namespace App\BackofficeModules\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Services\CurrentUser;
use App\Services\MyResponse;



class StaffController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');

        $staff= CurrentUser::user();
        $staffs = DB ::table('staff')
        ->select('staff.*');
        if(!empty($keyword))
        {
            $staffs->where('first_name','LIKE','%'.$keyword.'%')
                        ->orwhere('tel','LIKE','%'.$keyword.'%');
        }
        $staffs = $staffs->paginate(10);
    	return view('staff::staff',compact('staffs','staff'));
    
    }
    public function create(Request $request)
    {
        
        return view('staff::stafffrom');
    }
    public function store(Request $request)
    {
            $first_name = $request->get('first_name');
            $address = $request->get('address');
            $tel = $request->get('tel');
            if(!empty($first_name) 
            && !empty($address)  
            && !empty($tel) 
            )
            {
                $staffs = DB ::table('staff')
                ->where('first_name',$first_name)
                ->whereNull('deleted_at')
                ->first();
                if(!empty($staffs)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('staff')->insert([
                    'first_name' =>$first_name,
                    'address' =>$address,
                    'tel' =>$tel,
                    'created_at'=>date('Y-m-d H:i:s'),
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/staff');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }
            // return view('staff::staff',compact('staffs'));
    }


    public function show($staff_id,Request $request)
    {   
        if(is_numeric($staff_id))
        {
            $staff = DB::table('staff')
            ->where('staff_id',$staff_id)
            ->first();
            if(!empty($staff))
            {
                $action='/staff'.$staff_id;
                return view('staff::stafffrom',[
                    'staff'=>$staff,
                    'action'=>$action,
                   
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/staff',
        ]);
    }
    public function update($staff_id,Request $request)
    {
        if(is_numeric($staff_id))
        {
            $first_name = $request->get('first_name');
            $address = $request->get('address');
            $tel = $request->get('tel');
            if(!empty($first_name) 
            && !empty($address)  
            && !empty($tel) 
            )
            {
                $staffs = DB ::table('staff')
                ->where('staff_id',$staff_id)
                ->where('first_name',$first_name)
                ->where('address',$address)
                ->where('tel',$tel)
                ->whereNull('deleted_at')
                ->first();
                if(!empty($staffs)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('staff')
                ->where('staff_id',$staff_id)
                ->update([
                    'first_name' =>$first_name,
                    'address' =>$address,
                    'tel' =>$tel,
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/staff');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }

        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
        // return view('staff::staff',compact('staffs'));

    }
    public function destroy($id)
    {
        if(is_numeric($id))
        {
            DB::table('staff')
            ->where('staff_id',$id)
            ->delete();
            return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
        return view('staff::stafffrom',compact('id'));
    }
    
}