<?php

namespace App\LiffModules\Promotion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class PromotionController extends Controller
{
    public function index()
    {
    	return view('promo::Promotion');
    }
   
}