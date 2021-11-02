<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $record_values = Record::all(); // データベースからrecordsテーブルにある全データを抽出(collection)

        return view('record/record_list', compact('record_values'));
    }

    public function record_post()
    {
        return view('record/record_post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $id = Auth::id(); // 認証済みユーザーIDを代入

        $record_data = $request->only(['date', 'ski-resort', 'body']); // formから送られた値を連想配列で受け取り

        if ($request->hasFile('img')) {
            $path = $request->img->store('public/img'); // /storage/app/public/imgにアップロードファイルを保存
            $image_filename = basename($path); // パスから最後の「ファイル名.拡張子」の部分だけ取得

            $record_values = new \App\Models\Record([
                'user_id'         => $id,
                'date'            => $record_data['date'],
                'ski_resort'      => $record_data['ski-resort'],
                'body'            => $record_data['body'],
                'image_file_name' => $image_filename
            ]);
            $record_values->save();           
        } else {
            $record_values = new \App\Models\Record([
                'user_id'         => $id,
                'date'            => $record_data['date'],
                'ski_resort'      => $record_data['ski-resort'],
                'body'            => $record_data['body']
            ]);
            $record_values->save();
        }
        
        return redirect('record-list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}