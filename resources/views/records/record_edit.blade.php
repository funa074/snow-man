@extends('layouts.app')

@section('content')
<form action="/record-update/{{ $record_values->id }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <dl class="record-post flex">

    <dt><label class="label" for="date">滑走日</label></dt>
    <dd><input class="inputs date" id="date" type="date" required="required" name="date" value={{ $record_values->date }}></dd>
  
    <dt><label class="label" for="ski-resort">スキー場名</label></dt>
    <dd><input class="inputs text" id="ski-resort" type="text" required="required" name="ski-resort" value={{ $record_values->ski_resort }}></dd>
  
    <dt><label class="label" for="text">本文</label><p class="any1">※任意</p></dt>
    <dd><textarea class="inputs textarea" id="text" name="body">{{ $record_values->body }}</textarea></dd>
  
    <dt><label class="label" for="img">画像選択</label><p class="any2">※任意</p></dt>
    <dd><input type="file" name="img" id="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></dd>
  
    <input class="submit" type="submit" value="変更する">

  </dl>
</form>    
@endsection