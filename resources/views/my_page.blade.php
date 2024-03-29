@extends('layouts.app')

@section('content')
<div class="my-page-wrapper">
  <table class="my-page-table">
    <tr>
      <td>ユーザー名</td>
      <td>{{ $user->name }}</td>
    </tr>
    <tr>
      <td>合計滑走回数</td>
      <td>{{ $records->count() }}回</td>
    </tr>
    <tr>
      <td>21-22シーズン滑走回数</td>
      <td>{{ $season_records_count }}回</td>
    </tr>
  </table>
  <div class="my-page-btn flex">
    <a href="/record-list" class="btn">滑走履歴を確認</a>
    <a href="/record-create" class="btn">滑走情報を登録</a>
  </div>
  <a href="/home" class="return">スキー場一覧に戻る</a>
</div>

@endsection