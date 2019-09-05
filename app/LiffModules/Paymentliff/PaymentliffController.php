<?php

namespace App\LiffModules\Paymentliff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use stdClass;
use App\Services\MyResponse;
use App\Services\CurrentUser;

class PaymentliffController extends Controller
{
    public function index()
    {
        $customer= CurrentUser::user();
        $payments = DB ::table('orders')
        ->select('orders.*')
        ->first();
        // print_r($payments);exit;
        return view('payy::Paymentliff',compact('payments','customer'));
    }
    public function  paymentlifffrom()
    {
        $customer= CurrentUser::user();
        $payments = DB ::table('orders')
        ->select('orders.*','bank.bank_type','bank.image')
        ->leftJoin('bank','orders.bank_id','bank.bank_id')
        ->orderBy('orders.order_id','desc')
        ->first();
        return view('payyfrom::paymentlifffrom',compact('payments','customer'));
    }

    // public function store($order_id, Request $request)
    // {
        
    	
    // }
    // public function store(Request $request)
    // {

    // }
    
}