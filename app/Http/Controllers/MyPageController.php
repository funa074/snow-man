<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Record;

class MyPageController extends Controller
{
    public function index() {
        $id = Auth::id(); // 認証済みユーザーIDを代入
        $user = User::find($id); // usersテーブルからデータを取得

        $records = $user->records; // 滑走履歴のデータを取得

        $season_records_count = $records->whereBetween('date', ['2021-10-01', '2022-09-30'])->count(); // 21-22シーズンの滑走回数

        return view('my_page', compact('user', 'records', 'season_records_count'));
    }
}