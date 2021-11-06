@extends('layouts.app')

@section('content')

@foreach($record_values as $record_value)
    <article class="records-list">
        <a href="/record" class="records-link flex">
            <div class="records-img-wrap">
                <img class="records-img" src="storage/img/{{$record_value->image_file_name}}" alt="">
            </div>
            <div class="records-table">
                <p class="records-ski-resort">{{ $record_value->ski_resort }}</p>
                <p class="records-date">{{ $record_value->date }}</p>
                <p class="records-body">{{ $record_value->body }}</p>
            </div>
        </a>
    </article>
@endforeach

@endsection