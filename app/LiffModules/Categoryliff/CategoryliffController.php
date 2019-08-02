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
    public function categorylifffrom1()
    {
    	return view('cate::categorylifffrom1');
    }
    public function categorylifffrom2()
    {
    	return view('cate::categorylifffrom2');
    }
    public function categorylifffrom3()
    {
    	return view('cate::categorylifffrom3');
    }
    public function detail($pro_id)
    {
    	return view('cate::product-detail');
    }
}