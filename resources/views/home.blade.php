@extends('layouts.app')

@section('content')
<h1 class="ski-resort-search">スキー場を探す</h1>
<div class="ski-resort-list">
    @foreach($ski_resorts as $ski_resort)
        <a href="/ski-resort/{{ $ski_resort->id }}" class="flex ski-resorts">
            {{ $ski_resort->name }}
        </a>
        <br>
    @endforeach
</div>

@endsection