<?php

namespace App\LiffModules\Paymentliff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class PaymentliffController extends Controller
{
    public function index()
    {
        return view('payy::Paymentliff');
    	
    }
    public function paymentlifffrom()
    {
        return view('payyfrom::Paymentlifffrom');
    	
    }
   

}


