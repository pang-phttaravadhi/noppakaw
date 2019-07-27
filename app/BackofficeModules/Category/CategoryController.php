<?php

namespace App\BackofficeModules\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB; 
use App\Services\MyResponse;
class CategoryController extends Controller
{   
    public function index(Request $request)
    {   
        $keyword = $request->get('keyword');
        $category = DB ::table('category')
        ->select('category.*','category.cate_name')
        ->whereNull('category.deleted_at');
        
        if(!empty($keyword))
        {
            $category->where('cate_name','LIKE','%'.$keyword.'%');
        }

        $category = $category->paginate(10);
        return view('cat::category',compact('category'));
    }
    public function create()
    {
        return view('cat::categoryfrom');
    }
    public function store(Request $request)
    {
            $cate_name = $request->get('cate_name');
            if(!empty($cate_name))
            {
                $category = DB ::table('category')
                ->where('cate_name',$cate_name)
                ->whereNull('deleted_at')->first();
                if(!empty($category)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('category')->insert([
                    'cate_name' =>$cate_name
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/category');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }

    }


    public function show($cate_id,Request $request)
    {   
        if(is_numeric($cate_id))
        {
            $category = DB::table('category')->where('cate_id',$cate_id)->first();
            if(!empty($category))
            {
                $action='/category'.$cate_id;
                return view('cat::categoryfrom',[
                    'category'=>$category,
                    'action'=>$action
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/category',
        ]);
    }
    public function update($cate_id,Request $request)
    {
        if(is_numeric($cate_id))
        {
            $cate_name = $request->get('cate_name');
            

            if(!empty($cate_name) && is_numeric($cate_id))
            {
                $category = DB ::table('category')
                ->where('cate_id',$cate_id)
                ->where('cate_name',$cate_name)
                ->whereNull('deleted_at')->first();
                if(!empty($category)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('category')->where('cate_id',$cate_id)->update([
                    'cate_name' =>$cate_name
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/category');
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
        DB::table('category')->where('cate_id',$id)->update([
            'deleted_at'=>date('Y-m-d H:i:s'),
        ]);
        return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
}
