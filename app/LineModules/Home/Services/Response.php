<?php
namespace App\LineModules\Home\Services;

use Input;
use DB;
use stdClass;
use App\LineModules\Home\Services\MessageType;
class Response
{
    public static function recomence_product()
    {
        $products = DB::table('product')->where('is_recommence','Y')->get();
        if(!empty($products))
        {
            return MessageType::carousel($products);
        }
        return ['type'=>'text','text'=>'ขออภัยคะ สินค้าหมดคะ'];
    }

    public static function cateogrys()
    {
        
    }

}