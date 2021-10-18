@extends('layouts.app')

@section('content')
<h1 class="ski-resort">{{ $ski_resort->name }}</h1>
<table  class="ski-resort-table">
  <tr>
    <td>天気</td>
    <td>{{ $ski_resort_weather }}</td>
  </tr>
  <tr>
    <td>気温</td>
    <td>{{ $ski_resort_temp }}℃</td>
  </tr>
  <tr>
    <td>積雪量</td>
    <td>{{ $ski_resort_snow_cover }}cm</td>
  </tr>
</table>
<a href="/home" class="return">スキー場一覧に戻る</a>
@endsection