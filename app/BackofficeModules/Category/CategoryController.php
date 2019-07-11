<?php

namespace App\BackofficeModules\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class CategoryController extends Controller
{
    public function category()
    {
    	return view('cat::category');
    }
    public function categoryfrom()
    {
        return view('categoryfrom::categoryfrom');
    }
    
}