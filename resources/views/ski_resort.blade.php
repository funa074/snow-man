@extends('layouts.app')

@section('content')
<div class="ski-resort-wrapper">
  <h1 class="ski-resort">{{ $ski_resort->name }}</h1>
  <table  class="ski-resort-table">
    <tr>
      <td>現在の天気</td>
      <td>
        @if ($ski_resort_weather === 'Clear') 
          晴れ
        @elseif ($ski_resort_weather === 'Clouds')
          くもり
        @elseif ($ski_resort_weather === 'Rain')
          雨
        @elseif ($ski_resort_weather === 'Drizzle')
          小雨  
        @elseif ($ski_resort_weather === 'Thunderstorm')
          雷雨
        @elseif ($ski_resort_weather === 'Snow')
          雪
        @endif
      </td>
    </tr>
    <tr>
      <td>日中の気温</td>
      <td>
        @if ($ski_resort_temp == -0)
          0℃
        @else
          {{ $ski_resort_temp }}℃
        @endif
      </td>
    </tr>
    <tr>
      <td>積雪量</td>
      <td>{{ $ski_resort_snow_cover }}cm</td>
    </tr>
  </table>
  <a href="/home" class="return">スキー場一覧に戻る</a>
</div>
@endsection