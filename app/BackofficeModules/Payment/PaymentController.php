<?php

namespace App\BackofficeModules\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class PaymentController extends Controller
{
    public function payment()
    {
    	return view('pay::payment');
    }
    
}