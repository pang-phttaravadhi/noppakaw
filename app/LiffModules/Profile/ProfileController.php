<?php

namespace App\LiffModules\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Services\CurrentUser;

class ProfileController extends Controller
{
    public function index()
    {
        $customer= CurrentUser::user();
        //->where('shopping_cart.cust_id',$customer->cust_id)
    	return view('proo::Profile');
    }
    public function profilefrom()
    {
    	return view('proofrom::Profilefrom');
    }
    
}
