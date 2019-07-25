<?php

namespace App\LiffModules\History;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class HistoryController extends Controller
{
    public function index()
    {
    	return view('his::History');
    }
}