<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Record;
use App\Http\Requests\RecordRequest;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = Auth::id(); // 認証済みユーザーIDを代入
        $record_values = Record::where('user_id', $id)->latest('date')->get(); // user_idカラムと$idが一致する投稿を日付順で取得

        return view('records/list', compact('record_values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        return view('records/post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecordRequest $request)
    {
        $id = Auth::id(); // 認証済みユーザーIDを代入
        
        $record_data = $request->only(['date', 'ski_resort', 'body']); // formから送られた値を連想配列で受け取り
        
        $date = $request->ski_resort;

        if ($request->hasFile('img')) {
            $path = $request->img->store('public/img'); // /storage/app/public/imgにアップロードファイルを保存
            $image_filename = basename($path); // パスから最後の「ファイル名.拡張子」の部分だけ取得
            
            $record_values = new \App\Models\Record([
                'user_id'         => $id,
                'date'            => $record_data['date'],
                'ski_resort'      => $record_data['ski_resort'],
                'body'            => $record_data['body'],
                'image_file_name' => $image_filename
            ]);
            $record_values->save();           
        } else {
            $record_values = new \App\Models\Record([
                'user_id'         => $id,
                'date'            => $record_data['date'],
                'ski_resort'      => $record_data['ski_resort'],
                'body'            => $record_data['body']
            ]);
            $record_values->save();
        }
        
        return redirect('record-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $record_values = Record::find($id);

        if (auth()->user()->id !== $record_values->user_id) {
            return redirect('record-list')->with('error', '許可されていない操作です');
        }
        return view('records/show', compact('record_values'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record_values = Record::find($id);
        
        if (auth()->user()->id !== $record_values->user_id) {
            return redirect('record-list')->with('error', '許可されていない操作です');
        }
        return view('records/edit', compact('record_values'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RecordRequest $request, $id)
    {
        $record = Record::find($id); // recordsテーブルからidカラムの値を取得
        $user_id = Auth::id(); // 認証済みユーザーIDを代入
        
        $record_data = $request->only(['date', 'ski_resort', 'body']); // formから送られた値を連想配列で受け取り
        
        if ($request->hasFile('img')) {
            $del_file_name = $record->image_file_name; // 取得したデータからimage_file_nameカラム(ファイルの名前)の情報を取得する
            Storage::delete('public/img/'.$del_file_name); // storage/app/public/imgから、画像ファイルを削除する
            
            $path = $request->img->store('public/img'); // /storage/app/public/imgにアップロードファイルを保存
            $image_filename = basename($path); // パスから最後の「ファイル名.拡張子」の部分だけ取得
            
            $record->update([
                'user_id'         => $user_id,
                'date'            => $record_data['date'],
                'ski_resort'      => $record_data['ski_resort'],    
                'body'            => $record_data['body'],
                'image_file_name' => $image_filename
            ]);
        } else {
            $record->update([
                'user_id'         => $user_id,
                'date'            => $record_data['date'],
                'ski_resort'      => $record_data['ski_resort'],
                'body'            => $record_data['body']
            ]);
        }

        if((bool) $request->img_delete) { //  もし$request->img_deleteがtrue(真偽値)だったら
            $del_file_name = $record->image_file_name; // 取得したデータからimage_file_nameカラム(ファイルの名前)の情報を取得する
            Storage::delete('public/img/'.$del_file_name); // storage/app/public/imgから、画像ファイルを削除する
            $record->update(['image_file_name' => NULL]);
        }
        
        return redirect('record-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record_values = Record::find($id);
        $record_values->delete();

        if (auth()->user()->id !== $record_values->user_id) {
            return redirect('record-list')->with('error', '許可されていない操作です');
        }
        return redirect('record-list');
    }
}