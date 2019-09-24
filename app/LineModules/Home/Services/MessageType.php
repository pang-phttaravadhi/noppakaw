<?php
namespace App\LineModules\Home\Services;

use Input;
use DB;
use stdClass;
use App\LineModules\Home\Services\Response;
class MessageType
{
    public static function carousel_body($obj)
    {
        $product_detail_url = 'line://app/1595104009-7kvX5nOB';
        $baes_url = env('LINE_BASE_URL');
        $object = [];
        $object['thumbnailImageUrl']=$baes_url.$obj->image;
        $object['imageBackgroundColor']='#FFFFFF';
        $object['title']=$obj->pro_name;
        $object['text']=$obj->detail;
        $object['defaultAction']=[
            'type'=>'uri',
            'label'=>'ดูรายละเอียดสินค้า',
            'uri'=>$product_detail_url.'?product_id='.$obj->pro_id,
        ];
        $object['actions'][]=[
            'type'=>'postback',
            'label'=>'เลือกใส่ตะกร้า',
            "data"=>$obj->pro_id
        ];
        $object['actions'][]=[
            'type'=>'uri',
            'label'=>'ดูรายละเอียดสินค้า',
            'uri'=>$product_detail_url.'?product_id='.$obj->pro_id,
        ];
        return $object;
    }

    public static function carousel($items)
    {
        $columns = [];
        foreach($items as $item)
        {
            $columns[] = self::carousel_body($item);
        }
        $object = [];
        $object['type']='template';
        $object['altText']='รายการสินค้าแนะนำ';
        $object['template']['type'] = 'carousel';
        $object['template']['imageAspectRatio'] = 'square';
        $object['template']['columns'] =$columns;
        return $object;
    }
    public static function imagemap()
    {
        $baes_url = env('LINE_BASE_URL');
      return '{
        "type": "imagemap",
        "baseUrl": "'.$baes_url.'/assets/img/logo/category",
        "altText": "หมวดสินค้า",
        "baseSize": {
            "width": 1040,
            "height": 1040
        },
        "actions": [
            {  
                "type":"message",
                "label":"หมวดเครื่องแต่งกาย",
                "text":"หมวดเครื่องแต่งกาย",
                "area":{  
                    "x":0,
                    "y":0,
                    "width":522,
                    "height":564
                }
            },
            {  
                "type":"message",
                "label":"หมวดเครื่องประดับ",
                "text":"หมวดเครื่องประดับ",
                "area":{  
                    "x":490,
                    "y":0,
                    "width":518,
                    "height":564
                }
            },
            {  
                "type":"message",
                "label":"หมวดรองเท้า",
                "text":"หมวดรองเท้า",
                "area":{  
                    "x":0,
                    "y":552,
                    "width":1040,
                    "height":476
                }
            }
        ]
      }';  
    }
}
