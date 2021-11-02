@extends('layouts.app')

@section('content')

<div class="">
    @foreach($record_values as $record_value)
        <p>{{ $record_value->date }}</p>
        <p>{{ $record_value->ski_resort }}</p>
        <p>{{ $record_value->body }}</p>
        <img src="storage/img/{{$record_value->image_file_name}}" alt="">
        <br>
    @endforeach
</div>

@endsection