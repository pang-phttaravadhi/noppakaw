<?php

namespace App\LiffModules\Categoryliff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB;
use App\Services\MyResponse;

class CategoryliffController extends Controller
{
    public function index(Request $request)
    {
        $cate_id=$request->get('cate_id');
        $products = DB ::table('product')
        ->select('product.*','category.cate_name')
        ->leftJoin('category','product.cate_id','category.cate_id')
        ->whereNull('product.deleted_at');
        if(is_numeric($cate_id)){
            $products->where('product.cate_id',$cate_id);
        }

         $products = $products->paginate(10);
         $category = DB ::table('category')
         ->select('cate_id','cate_name')
         ->whereNull('deleted_at')
         ->get(); 
         //print_r($category);exit;

        return view('cate::categoryliff',compact('products','category'));
        
    }
    public function categorylifffrom1()
    {
    	return view('cate::categorylifffrom1');
    }
    public function categorylifffrom2()
    {
    	return view('cate::categorylifffrom2');
    }
    public function categorylifffrom3()
    {
    	return view('cate::categorylifffrom3');
    }
    public function detail($pro_id)
    {
    	return view('cate::product-detail');
    }
}