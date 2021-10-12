<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Models\SkiResort; // スキーリゾートモデルを使える様にしている。

class SkiResortController extends Controller
{
    public function index($id) {
        $ski_resort = SkiResort::find($id); // 変数にDBのスキー場の情報を代入

        $API_KEY = config('services.openweathermap.key'); // コンフィグファイル(config/)から特定の値を取得 ドット記法
        $base_url = config('services.openweathermap.url');

        $lat = 35; // 緯度
        $lon = 138; // 経度
        $exclude = 'minutely,alerts'; // 除外するパラメーター

        $url = file_get_contents("$base_url/onecall?lat=$lat&lon=$lon&exclude=$exclude&units=metric&lang=ja&appid=$API_KEY"); // Webページの内容を読み込んでいる。

        $weather_data = json_decode($url, true); // JSON文字列をデコード 第2引数をtrueにして連想配列形式のオブジェクトを返している。
        
        if (isset($weather_data['current']['weather'][0]['description'])) {
            $ski_resort_weather = $weather_data['current']['weather'][0]['description']; // 現在の天気
        } else {
            $ski_resort_weather = '-';
        }

        if (round($weather_data['daily'][0]['temp']['day']) !== null) {
            $ski_resort_temp = round($weather_data['daily'][0]['temp']['day']); // 日中の気温
        } else {
            $ski_resort_temp = '-';
        }

        if (isset($weather_data['daily'][0]['snow'])) {
            $ski_resort_snow_cover = $weather_data['daily'][0]['snow']; // 積雪量
        } else {
            $ski_resort_snow_cover = '-';
        }
        
        return view('ski_resort', compact('ski_resort', 'ski_resort_weather', 'ski_resort_temp', 'ski_resort_snow_cover'));
    }
}