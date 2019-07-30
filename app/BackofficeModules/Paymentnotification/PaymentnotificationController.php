<?php

namespace App\BackofficeModules\Paymentnotification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class PaymentnotificationController extends Controller
{
    public function index(Request $request)
    {
      
    	return view('payy::paymentnotification');
    	
    }
    
}