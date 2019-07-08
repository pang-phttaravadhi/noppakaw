<?php

namespace App\BackofficeModules\Status;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;

class StatusController extends Controller
{
    public function status()
    {
    	return view('sta::status');
    }
    
}