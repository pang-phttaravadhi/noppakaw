<?php

namespace App\LiffModules\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use stdClass;
use App\Services\MyResponse;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $is_recommence=$request->get('is_recommence');

        $products = DB::table('product')
        ->select('product.*')
        ->where('is_recommence','Y')
        ->whereNull('product.deleted_at');
        
       if(!empty($is_recommence))
       {
            $is_recommence ='Y';
        }

        $products = $products->get();

    	return view('liffhome::index' ,compact('products'));
    }
}