<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Models\SkiResort スキーリゾートモデルを使える様にしている。

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
        // $ski_resorts = SkiResort::Paginate(6); compact('ski_resorts') 変数にDBのスキーリゾートの情報を６つ代入
        return view('home');
    }
}