<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherAPIController extends Controller
{
    public function weatherData() {
        $API_KEY = config('services.openweathermap.key'); // コンフィグファイル(config/)から特定の値を取得 ドット記法
        $base_url = config('services.openweathermap.url');

        // $lat = 35.9981546; // 緯度
        // $lon = 136.8771562; // 経度
        $lat = 34.6545245; // 緯度
        $lon = 135.4289135; // 経度
        $exclude = 'minutely,hourly,alerts'; // 除外するパラメーター

        $url = file_get_contents("$base_url/onecall?lat=$lat&lon=$lon&exclude=$exclude&units=metric&lang=ja&appid=$API_KEY"); // Webページの内容を読み込んでいる。

        $weather_data = json_decode($url, true); // JSON文字列をデコード 第2引数をtrueにして連想配列形式のオブジェクトを返している。
        
        $current_weather = $weather_data['current']['weather'][0]['description']; // 現在の天候
        $daily_temp_day = response()->json(round($weather_data['daily'][0]['temp']['day'])); // 日中の気温。
 
        return $weather_data;
    }
}