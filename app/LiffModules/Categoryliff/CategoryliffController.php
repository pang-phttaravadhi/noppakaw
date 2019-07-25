<?php

namespace App\LiffModules\Categoryliff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class CategoryliffController extends Controller
{
    public function index()
    {
    	return view('cate::categoryliff');
    }
}