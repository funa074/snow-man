@extends('layouts.app')

@section('content')
  <article class="record">
    <p class="record-date">{{ $record_values->date }}</p>
    <p class="record-ski-resort">{{ $record_values->ski_resort }}</p>
    <img class="record-img" src="{{ asset("storage/img/".$record_values->image_file_name) }}" />
    <p class="record-body">{{ $record_values->body }}</p>
  </article>
@endsection