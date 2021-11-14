@extends('layouts.app')

@section('content')
  <article class="record">
    <p class="record-date">{{ $record_values->date }}</p>
    <p class="record-ski-resort">{{ $record_values->ski_resort }}</p>

    @if (!empty($record_values->image_file_name))
      <img class="record-img" src="{{ asset("storage/img/".$record_values->image_file_name) }}" />
    @else
      <img class="record-img" src="{{ asset('img/noimage.jpg') }}" />
    @endif
    <p class="record-body">{{ $record_values->body }}</p>

    <div class="record-btn-wrapper flex">
      <a href="/record-list" class="btn back btn-outline-primary">戻る</a>
      <a href="/record-edit/{{ $record_values->id }}" class="btn edit btn-outline-primary">編集</a>
      <form action="/record-delete/{{ $record_values->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" onclick='return confirm("削除しますか？");' value="削除" class="btn destroy btn-outline-primary">
      </form>
    </div>
  </article>
@endsection