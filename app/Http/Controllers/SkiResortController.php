<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Models\SkiResort スキーリゾートモデルを使える様にしている。



class SkiResortController extends Controller
{
    public function index() {
        // $ski_resorts = SkiResort::all(); compact('ski_resorts') 変数にDBのスキーリゾートの情報を代入
        return view('ski_resort');
    } 
}