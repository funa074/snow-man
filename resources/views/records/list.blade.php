@extends('layouts.app')

@section('content')

@if($record_values->isNotEmpty())
    @foreach($record_values as $record_value)
        <article class="records-list">
            <a href="/record/{{ $record_value->id }}" class="records-link flex">
                <div class="records-img-wrap">
                    <img class="records-img" src="{{ asset($record_value->image_full_path) }}" />
                </div>
                <div class="records-table">
                    <p class="records-ski-resort">{{ $record_value->ski_resort }}</p>
                    <p class="records-date">{{ $record_value->date }}</p>
                    <p class="records-body">{!! nl2br(htmlspecialchars($record_value->body)) !!}</p>
                </div>
            </a>
        </article>
    @endforeach
@else
    <p class="text-center">まだ投稿がありません</p>
@endif

@endsection