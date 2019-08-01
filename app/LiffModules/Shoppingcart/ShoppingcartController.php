<?php

namespace App\LiffModules\Shoppingcart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class ShoppingcartController extends Controller
{
    public function index()
    {
    	return view('shopp::shoppingcart');
    }
}