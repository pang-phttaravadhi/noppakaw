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
    public function detail($pro_id)
    {
        $product = DB ::table('product')
        ->select('product.*','category.cate_name')
        ->leftJoin('category','product.cate_id','category.cate_id')
        ->whereNull('product.deleted_at')
        ->where('pro_id','=',$pro_id)
        ->first();

    	return view('cate::product-detail',compact('product'));
    }
}