<?php

namespace App\BackofficeModules\bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class BankController extends Controller
{
    public function index()
    {
    	return view('bank::bank');
    }
    
}