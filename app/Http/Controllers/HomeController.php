<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SkiResort; // スキーリゾートモデルを使える様にしている。


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ski_resorts = SkiResort::all(); // 変数にDBのスキー場の情報を代入
        return view('home', compact('ski_resorts'));
    }
}