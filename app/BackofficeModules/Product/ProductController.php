<?php

namespace App\BackofficeModules\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB; 
use App\Services\MyResponse;
class ProductController extends Controller
{   
    public function index(Request $request)
    {   
        $cate_id = $request->get('cate_id');
        $keyword = $request->get('keyword');
        $products = DB ::table('product')
        ->select('product.*','category.cate_name')
        ->leftJoin('category','product.cate_id','category.cate_id')
        ->whereNull('product.deleted_at');
        
        if(!empty($keyword))
        {
            $products->where('pro_name','LIKE','%'.$keyword.'%');
        }
        if(is_numeric($cate_id))
        {
            $products->where('product.cate_id','=',$cate_id);
        }
        $products = $products->orderBy('product.price','desc')->paginate(6);
        $category= DB::table('category')->whereNull('deleted_at')->get();
        return view('pro::product',compact('products','category'));
    }
    public function create()
    {
        $category= DB::table('category')
        ->whereNull('deleted_at')
        ->get();
        return view('pro::productfrom',compact('category'));
    }
    public function store(Request $request)
    {
            $pro_name = $request->get('pro_name');
            $price = $request->get('price');
            $weight = $request->get('weight');
            $cate_id = $request->get('cate_id');
            $is_new = $request->get('is_new');
            $is_recommence = $request->get('is_recommence');
            $detail = $request->get('detail');
            $image = $request->get('image');
            if(!empty($pro_name) 
            && !empty($image)  
            && !empty($price) 
            && !empty($weight) 
            && !empty($detail) 
            && !empty($cate_id) 
            )
            {
                
                if(!empty($is_new))
                {
                    $is_new = 'Y'; 
                }
                else
                {
                    $is_new = 'N';
                }
                if(!empty($is_recommence))
                {
                    $is_recommence = 'Y'; 
                }
                else
                {
                    $is_recommence = 'N';
                }
                $products = DB ::table('product')
                ->where('pro_name',$pro_name)
                ->whereNull('deleted_at')
                ->first();
                if(!empty($product)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('product')->insert([
                    'pro_name' =>$pro_name,
                    'price' =>$price,
                    'weight' =>$weight,
                    'detail' =>$detail,
                    'cate_id'=>$cate_id,
                    'is_new'=>$is_new,
                    'is_recommence'=>$is_recommence,
                    'image'=>$image,
                    'created_at'=>date('Y-m-d H:i:s'),
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้ว','/product');
            }else{
                return MyResponse::error('กรุณาป้อนข้อมูลให้ครบค่ะ');
            }

    }


    public function show($pro_id,Request $request)
    {   
        if(is_numeric($pro_id))
        {
            $product = DB::table('product')->where('pro_id',$pro_id)->first();
            if(!empty($product))
            {
                $action='/product'.$pro_id;
                $category= DB::table('category')->whereNull('deleted_at')->get();                
                return view('pro::productfrom',[
                    'product'=>$product,
                    'action'=>$action,
                    'category'=>$category
                ]);
            }
        }
        return view('data-not-found',[
            'back_url'=>'/product',
        ]);
    }
    public function update($pro_id,Request $request)
    {
        if(is_numeric($pro_id))
        {
            $pro_name = $request->get('pro_name');
            $price = $request->get('price');
            $weight = $request->get('weight');
            $detail = $request->get('detail');
            $cate_id = $request->get('cate_id');
            $is_new = $request->get('is_new');
            $is_recommence= $request->get('is_recommence');
            $image = $request->get('image');

            if(!empty($pro_name) 
            && !empty($image) 
            && is_numeric($cate_id) 
            && is_numeric($price) 
            && is_numeric($weight) 
            && !empty($detail) 
            )
            {
                
                if(!empty($is_new))
                {
                    $is_new = 'Y'; 
                }
                else
                {
                    $is_new = 'N';
                }
                if(!empty($is_recommence))
                {
                    $is_recommence = 'Y'; 
                }
                else
                {
                    $is_recommence = 'N';
                }
                $products = DB ::table('product')
                ->where('pro_id',$pro_id)
                ->where('pro_name',$pro_name)
                ->whereNull('deleted_at')->first();
                if(!empty($product)){
                    return MyResponse::error('ขออภัยข้อมูลนี้มีอยู่ในระบบแล้ว');
                }
                DB::table('product')->where('pro_id',$pro_id)->update([
                    'pro_name' =>$pro_name,
                    'price' =>$price,
                    'weight' =>$weight,
                    'detail' =>$detail,
                    'cate_id'=>$cate_id,
                    'is_new'=>$is_new,
                    'is_recommence'=>$is_recommence,
                    'image'=>$image,
                    'updated_at'=>date('Y-m-d H:i:s')
                ]);
                return MyResponse::success('ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ','/product');
            }else{ 
                return MyResponse::error('กรุณาป้อนข้อมุลให้ครบค่ะ');
            }
        }

        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
    public function destroy($pro_id)
    {
        if(is_numeric($pro_id))
        {
            DB::table('product')->where('pro_id',$pro_id)->update([
                'deleted_at'=>date('Y-m-d H:i:s'),
            ]);
            return MyResponse::success ('ระบบได้ลบเรียบร้อยค่ะ');
        }
        return MyResponse::error('ป้อนข้อมูลไม่ถูกต้องค่ะ');
    }
}