<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index() {
        
// リクエストで年月(yyyy/mm)を受け取る
//$date = $request->post('date');
$date = '2024/02';
 
// $dateが空の時は現在の年月(yyyy/mm)を設定
if($date == "") {
        $now = new DateTime();
        $date = $now->format('Y/m');
}
 
// カレンダー配列を生成
$tdate = new DateTime($date.'/01');
$week = ["日", "月", "火", "水", "木", "金", "土"];
$date_array = []; // 対象月の日付リスト
do{
        $yobi = $week[$tdate->format("w")];
 
        $date_array[] = [
                'date' => $tdate->format('Y/m/d')
                ,'yobi' => $yobi
        ];
        $tdate->modify('+1 day');
}while(intval($tdate->format('d')) !== 1);
 
// 対象月の日付リストを出力
// echo print_r($date_array, true);


    }
}
