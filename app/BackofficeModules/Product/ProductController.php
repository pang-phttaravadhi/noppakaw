<?php

namespace App\BackofficeModules\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB;

class ProductController extends Controller
{   
    public function index(Request $request)
    {   
        $products = DB::table('product')->paginate(10);

        // $products = [];
        // for($i=0;$i<25;$i++)
        // {
        //     $products[] = [
        //         'pro_name'=>'ชุดไทยประยุกค์'.$i,
        //         'cate'=>'ชุดไทย'.$i,
        //         'price'=>'2000',
        //         'pro_det'=>'รายละเอียดชุดไทยประยุกค์'.$i
        //     ];
        // }
        
        // if(!empty($products)) {
        //     DB::table('product')->insert($products);
        // }
        return view('pro::product',compact('products'));
    }

    public function action_insert(Request $request)
    {
        
            $pro_name = $request->get('pro_name');
            $price = $request->get('price');
            $cate = $request->get('cate');
            $pro_det = $request->get('pro_det');
            // $image = $request->get('image');

            if(!empty($pro_name) && is_numeric($price))
            {
                DB::table('product')->insert([
                    'pro_name' =>$pro_name,
                    'price' =>$price,
                    'cate'=>$cate,
                    'pro_det'=>$pro_det
                ]);
                return redirect('/product/'.$id);

            }

        return redirect('/product');
        
    }

    public function action_update($id,Request $request)
    {   
        if(is_numeric($id))
        {
            $pro_id = $request->get('pro_id');
            $pro_name = $request->get('pro_name');
            $price = $request->get('price');
            $cate = $request->get('cate');
            $pro_det = $request->get('pro_det');
            // $image = $request->get('image');

            if(!empty($pro_name) && is_numeric($price))
            {
                DB::table('product')->where('pro_id',$id)->update([
                    'pro_name' =>$pro_name,
                    'price' =>$price,
                    'cate'=>$cate,
                    'pro_det'=>$pro_det
                ]);
                return redirect('/product/'.$id);

            }

        }
        return redirect('/product');
        
    }


    public function action_create() {
        $action = '/product';
        $hidden = '';
        return view('pro::productfrom',compact('action','hidden'));
    }
    public function action_edit($id) {
        $product = DB::table('product')->where('pro_id',$id)->first();
        $action = '/product/'.$id;
        $hidden = 'put';
        return view('pro::productfrom',compact('product','action','hidden'));
    }
    public function action_delete($id)
    {
        if(is_numeric($id))
        {
        DB::table('product')->where('id',$id)->delete();
        return redirect('/product');
        }
    
    }
    
    
}