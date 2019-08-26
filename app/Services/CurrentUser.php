<?php

namespace App\Services;
use Auth;
use DB;
use MyConst;
class CurrentUser
{
    public static function user(){
        //for test
        
        //  return DB::table('customer')

        //        ->where('cust_id',3)
        //         ->first();
              



            

        if(Auth::check()){
            $user = Auth::user();
            if($user->user_type===MyConst::$USER_LEVEL_ADMIN){
                $admin = DB::table('admin')
                            ->where('id',$user->user_id)
                            ->first();
                return $admin;
            }
            elseif($user->user_type===MyConst::$USER_LEVEL_STAFF){
                $admin = DB::table('staff')
                            ->where('staff_id',$user->user_id)
                            ->first();
                return $admin;
            }
            elseif($user->user_type===MyConst::$USER_LEVEL_CUSTOMER){
                $admin = DB::table('customer')
                            ->where('cust_id',$user->user_id)
                            ->first();
                return $admin;
            }
        }
        return null;
        
    }
    public static function cart(){
        $customer= self::user();
        $shopping_cart = DB ::table('shopping_cart')
        ->select( DB::raw('count(*) as total_amount'))
        ->where('cust_id',$customer->cust_id)
        ->first();
          return $shopping_cart->total_amount;
        
        
    }
}