<?php

namespace App\BackofficeModules\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use stdClass;
use DB; 

class PaymentController extends Controller
{   
    public function index(Request $request)
    {   
        return view('paymentfrom::payment');
    }
}
      