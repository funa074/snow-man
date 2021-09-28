<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SkiResort; // スキーリゾートモデルを使える様にしている。



class SkiResortController extends Controller
{
    public function index($id) {
        $ski_resort = SkiResort::find($id); // 変数にDBのスキー場の情報を代入
        return view('ski_resort', compact('ski_resort'));
    } 
}