<?php

namespace App\LiffModules\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('proo::Profile');
    }
    public function profilefrom()
    {
    	return view('proofrom::Profilefrom');
    }
    
}