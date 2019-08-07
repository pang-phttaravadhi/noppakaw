<?php

namespace App\LiffModules\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use stdClass;
use App\Services\MyResponse;
use Auth;


class CustomerController extends Controller
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
    public function login(Request $request)
    {
        $line_id=$request->get('line_id');
        $displayname=$request->get('displayname');
        $pictureurl=$request->get('pictureurl');

        if(!empty($line_id)){
            $customer = DB::table('customer') 
            ->where('line_id',$line_id)->first();
            if(!empty($customer)){
                $user = DB::table('users') 
                ->where('user_type','USER_LEVEL_CUSTOMER')
                ->where('user_id',$customer->cust_id)->first();
                Auth::loginUsingId($user->id,true);
            }else{
                $customer_id = DB::table('customer')->insertGetId([
                    'cust_name'=>$displayname,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'line_id'=>$line_id
                ]);
                $user_id = DB::table('users')->insertGetId([
                    'user_id'=>$customer_id,
                    'user_type'=>'USER_LEVEL_CUSTOMER',
                    'username'=>$line_id,
                    'status'=>'N',
                    'created_at'=>date('Y-m-d H:i:s')
                ]);
                Auth::loginUsingId($user_id,true);
            }

        }
    }
}