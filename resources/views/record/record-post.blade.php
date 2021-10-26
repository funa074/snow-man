@extends('layouts.app')

@section('content')
<form action="/recored-list" method="post">
  @csrf
  <dl class="record flex">

    <dt><label class="label" for="date">滑走日</label></dt>
    <dd><input class="inputs" id="date" type="date" required="required" name="date"></dd>
  
    <dt><label class="label" for="ski-resort">スキー場名</label></dt>
    <dd><input class="inputs" id="ski-resort" type="text" required="required" name="ski-resort"></dd>
  
    <dt><label class="label" for="text">本文</label></dt>
    <dd><textarea class="inputs textarea" id="text"  required="required"></textarea></dd>
  
    <dt class="flex"><label class="label" for="img">画像選択</label><p>※任意</p></dt>
    <dd><input type="file" name="img" id="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></dd>
  
    <input class="submit" type="submit" value="登録する">

  </dl>
</form>    
@endsection