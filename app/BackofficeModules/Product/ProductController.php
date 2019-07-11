<?php

namespace App\BackofficeModules\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	return view('pro::product');
    }
    public function productfrom()
    {
    	return view('pro::productfrom');
    }
    
}