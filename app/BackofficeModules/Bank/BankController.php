<?php

namespace App\BackofficeModules\Bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Services\CurrentUser;
use App\Services\MyResponse;


class BankController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');

        $bank= CurrentUser::user();
        $banks = DB ::table('bank')
        ->select('bank.*');
        if(!empty($keyword))
        {
            $banks->where('bank_name','LIKE','%'.$keyword.'%');
                        
        }
        $banks = $banks->paginate(10);
    	return view('bank::bank',compact('banks','bank'));
    
    }
    public function create(Request $request)
    {
        
        return view('bank::bankfrom');
    }
    public function store(Request $request)
    {
            $bank_name = $request->get('bank_name');
            $bank_num = $request->get('bank_num');
            $bank_type = $request->get('bank_type');
            $name = $request->get('name');
            $image = $request->get('image');
            if(!empty($bank_name) 
            && !empty($bank_num)  
            && !empty($bank_type) 
            && !empty($name) 
            && !empty($image) 
            )
            {
                $banks = DB ::table('bank')
                ->where('bank_name',$bank_name)
                ->whereNull('deleted_at')
                ->first();
                if(!empty($bank)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('bank')->insert([
                    'bank_name' =>$bank_name,
                    'bank_num' =>$bank_num,
                    'bank_type' =>$bank_type,
                    'name' =>$name,
                    'image'=>$image,
                    'created_at'=>date('Y-m-d H:i:s'),
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/bank');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }

    }


    public function show($bank_id,Request $request)
    {   
        if(is_numeric($bank_id))
        {
            $bank = DB::table('bank')
            ->where('bank_id',$bank_id)
            ->first();
            if(!empty($bank))
            {
                $action='/bank'.$bank_id;
                return view('bank::bankfrom',[
                    'bank'=>$bank,
                    'action'=>$action,
                   
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/bank',
        ]);
    }
    public function update($bank_id,Request $request)
    {
        if(is_numeric($bank_id))
        {
            $bank_name = $request->get('bank_name');
            $bank_num = $request->get('bank_num');
            $bank_type = $request->get('bank_type');
            $name = $request->get('name');
            $image = $request->get('image');
            if(!empty($bank_name) 
            && !empty($bank_num)  
            && !empty($bank_type) 
            && !empty($name) 
            && !empty($image) 
            )
            {
                $banks = DB ::table('bank')
                ->where('bank_id',$bank_id)
                ->whereNull('deleted_at')
                ->first();
                if(!empty($bank)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('bank')->where('bank_id',$bank_id)
                ->update([
                    'bank_name' =>$bank_name,
                    'bank_num' =>$bank_num,
                    'bank_type' =>$bank_type,
                    'name' =>$name,
                    'image'=>$image,
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/bank');
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
            DB::table('bank')
            ->where('bank_id',$id)
            ->delete();
            return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
        return view('bank::bankfrom',compact('id'));
    }
    
}