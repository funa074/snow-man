@extends('layouts.app')

@section('content')
<h1>{{ $ski_resort->name }}</h1>
<tr>
  <td>天気</td>
  <td>{{ $ski_resort->weather }}</td>
</tr>
<tr>
  <td>気温</td>
  <td>{{ $ski_resort->temperature }}℃</td>
</tr>
<tr>
  <td>積雪量</td>
  <td>{{ $ski_resort->snow_cover }}cm</td>
</tr>
@endsection