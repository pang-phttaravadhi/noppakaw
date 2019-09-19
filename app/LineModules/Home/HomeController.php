<?php
namespace App\LineModules\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use stdClass;
use App\LineModules\Home\Services\RequestMessage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        file_put_contents(__DIR__.'/request.txt',json_encode($request->all(),1));
        RequestMessage::get($request->all());
        echo 'ok';exit;
    }
}
      