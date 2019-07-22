<?php

namespace App\BackofficeModules\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB;

class CategoryController extends Controller
{   
    public function index(Request $request)
    {   
        $category = DB::table('category')->paginate(25);

        // $category = [];
        // for($i=0;$i<25;$i++)
        // {
        //     $category[] = [
        //         'pro_name'=>'ชุดไทยประยุกค์'.$i,
        //         'cate'=>'ชุดไทย'.$i,
        //         'price'=>'2000',
        //         'pro_det'=>'รายละเอียดชุดไทยประยุกค์'.$i
        //     ];
        // }
        
        // if(!empty($category)) {
        //     DB::table('category')->insert($category);
        // }
        return view('cat::category',compact('category'));
    }

    public function action_insert(Request $request)
    {
        
            $cate_name = $request->get('cate_name');
            // $image = $request->get('image');

            if(!empty($cate_name))
            {
                DB::table('category')->insert([
                    'cate_name' =>$cate_name
                ]);
                return redirect('/category/'.$id);

            }

        return redirect('/category');
        
    }

    public function action_update($id,Request $request)
    {   
        if(is_numeric($id))
        {
            $cate_id = $request->get('cate_id');
            $cate_name = $request->get('cate_name');
            // $image = $request->get('image');

            if(!empty($cate_name))
            {
                DB::table('category')->where('cate_id',$id)->update([
                    'cate_name' =>$cate_name
                ]);
                return redirect('/category/'.$id);

            }

        }
        return redirect('/category');
        
    }


    public function action_create() {
        $action = '/category';
        $hidden = '';
        return view('cat::categoryfrom',compact('action','hidden'));
    }
    public function action_edit($id) {
        $product = DB::table('category')->where('cate_id',$id)->first();
        $action = '/category/'.$id;
        $hidden = 'put';
        return view('cat::categoryfrom',compact('category','action','hidden'));
    }
    public function action_delete($id)
    {
        if(is_numeric($id))
        {
        DB::table('category')->where('id',$id)->delete();
        return redirect('/category');
        }
    
    }
    
    
}


