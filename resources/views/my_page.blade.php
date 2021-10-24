@extends('layouts.app')

@section('content')
<table class="ski-resort-table">
  <tr>
    <td>ユーザー名</td>
    <td>{{ $user->name }}</td>
  </tr>
  <tr>
    <td>合計滑走回数</td>
    <td>{{ $records->count() }}回</td>
  </tr>
  <tr>
    <td>シーズン中滑走回数</td>
    <td>-回</td>
  </tr>
</table>
<div class="register-btn flex">
  <a href="/record-list" class="btn">滑走履歴を確認</a>
  <a href="/record-post" class="btn">滑走情報を登録</a>
</div>
<a href="/home" class="return">スキー場一覧に戻る</a>


@endsection