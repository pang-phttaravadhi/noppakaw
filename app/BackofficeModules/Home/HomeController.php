<?php

namespace App\BackofficeModules\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home::index');
    }
}