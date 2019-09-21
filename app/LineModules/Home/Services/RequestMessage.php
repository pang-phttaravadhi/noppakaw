<?php
namespace App\LineModules\Home\Services;

use Input;
use DB;
use stdClass;
use App\LineModules\Home\Services\Response;
use App\LineModules\Home\Services\SendToLine;
use App\LineModules\Home\Services\MessageType;
class RequestMessage
{
    public static function get($request)
    {
        $reply_token    ='';
        $user_id        = '';
        $text           ='';
        $mesage         = ['type'=>'text','text'=>'ถามอะไรมา บอทงง'];
        if($request['events'][0])
        {
            $obj = $request['events'][0];
            if($obj['type']=='message')
            {
                $reply_token=$obj['replyToken'];
                $user_id = $obj['source']['userId'];
                $text = $obj['message']['text'];
                $mesage = [];
                switch($text)
                {
                    case 'สินค้าแนะนำ':
                        $mesage=Response::recomence_product();
                        break;
                    case 'หมวดชุดไทย':
                        $mesage=Response::cateogrys(1);
                        break;
                    case 'หมวดเครื่องประดับ':
                        $mesage=Response::cateogrys(2);
                        break;
                    case 'หมวดรองเท้า':
                        $mesage=Response::cateogrys(3);
                        break;

                    case 'หมวดสินค้า':
                        $mesage=json_decode(MessageType::imagemap(),true);
                        break;
                }
                $sender_message = ['to'=>$user_id,'messages'=>[$mesage]];
                file_put_contents(__DIR__.'/message.txt',json_encode($sender_message));
                SendToLine::push($sender_message);
            }
            elseif($obj['type']=='postback')
            {
                $reply_token    = $obj['replyToken'];
                $line_id        = $obj['source']['userId'];
                $product_id     = $obj['postback']['data'];

                $customer = DB::table('customer') 
                ->where('line_id',$line_id)->first();
                if(empty($customer))
                {
                    $cus_id = DB::table('customer')->insertGetId([
                        'cust_name'=>'',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'line_id'=>$line_id,
                        'image'=>''
                    ]);
                    $user_id = DB::table('users')->insertGetId([
                        'user_id'=>$cus_id,
                        'user_type'=>'USER_LEVEL_CUSTOMER',
                        'username'=>$line_id,
                        'status'=>'N',
                        'created_at'=>date('Y-m-d H:i:s')
                    ]);
                }
                else
                {
                    $cus_id = $customer->cust_id;
                }

                if(!empty($cus_id))
                {
                    $product = DB ::table('product')
                ->where('pro_id',$product_id)
                ->first();
                $shopping_cart= DB::table ('shopping_cart')
                ->where ('cust_id',$cus_id)
                ->where ('pro_id','=',$product_id)
                ->first();
                    if(empty($shopping_cart))
                    {
                        DB::table ('shopping_cart')
                        ->insert([
                            'pro_id' =>$product_id,
                            'cust_id' =>$cus_id,
                            'amount' =>1,
                            'price_per_unit' =>$product->price,
                            'created_at'=>date('Y-m-d H:i:s'),
                        ]);
                    }
                }
               
                $sender_message = ['to'=>$line_id,'messages'=>[['type'=>'text','text'=>'ระบบได้เพิ่มสินค้าลงตะกร้าเรียบร้อยแล้วคะ']]];
                file_put_contents(__DIR__.'/message.txt',json_encode($sender_message));
                SendToLine::push($sender_message);
            }
        }
        // $category= DB::table('category')
        // ->where('cate_id',$cate_id)
        // ->get();
        // {
        //     "type": "imagemap",
        //     "baseUrl": "https://example.com/bot/images/rm001",
        //     "altText": "This is an imagemap",
        //     "baseSize": {
        //         "width": 1040,
        //         "height": 1040
        //     }
        //     "actions": [
        //         {
        //             "type": "uri",
        //             "linkUri": "https://example.com/",
        //             "area": {
        //                 "x": 0,
        //                 "y": 586,
        //                 "width": 520,
        //                 "height": 454
        //             }
        //         },
        //         {
        //             "type": "message",
        //             "text": "Hello",
        //             "area": {
        //                 "x": 520,
        //                 "y": 586,
        //                 "width": 520,
        //                 "height": 454
        //             }
        //         }
        //     ]
        // }
    }
}