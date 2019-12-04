<?php
namespace App\LineModules\Home\Services;

use Input;
use DB;
use stdClass;
class SendToLine
{
    public static function reply($message)
    {
        $data_string = json_encode($message);                                                                                   
        $ch = curl_init('https://api.line.me/v2/bot/message/reply');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json; charset=utf-8', 
            'Authorization: Bearer '.env('LINE_ACCESS_TOKEN'),                                                                              
            'Content-Length: ' . strlen($data_string))                                                                       
        );                                                                                                                   
        $result = curl_exec($ch);
        //file_put_contents(__DIR__.'/log-send-to-line.txt',$result);
        curl_close($ch);
    }

    public static function push($message)
    {
        $data_string = json_encode($message);                                                                                   
        $ch = curl_init('https://api.line.me/v2/bot/message/push');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json; charset=utf-8', 
            'Authorization: Bearer '.env('LINE_ACCESS_TOKEN'),                                                                              
            'Content-Length: ' . strlen($data_string))                                                                       
        );                                                                                                                   
        $result = curl_exec($ch);
        //file_put_contents(__DIR__.'/log-send-to-line.txt',$result);
        curl_close($ch);
    }
}