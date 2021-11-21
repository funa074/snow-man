@extends('layouts.app')

@section('content')
<form action="/record-store" method="POST" enctype="multipart/form-data">
  @csrf
  <dl class="record-post flex">

    @if ($errors->any())
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    @endif

    <dt><label class="label" for="date">滑走日</label><p class="mandatory-date">*</p></dt>
    <dd><input class="inputs date" id="date" type="date" required="required" name="date"></dd>
  
    <dt><label class="label" for="ski-resort">スキー場名</label><p class="mandatory-ski-resort">*</p></dt>
    <dd><input class="inputs text" id="ski-resort" type="text" required="required" name="ski_resort" maxlength="30"></dd>
  
    <dt><label class="label" for="text">本文</label><p class="any-text">※任意</p></dt>
    <dd><textarea class="inputs textarea" id="text" name="body" maxlength="21845"></textarea></dd>
  
    <dt><label class="label" for="img">画像選択</label><p class="any-img">※任意</p></dt>
    <dd><input type="file" name="img" id="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></dd>
  
    <input class="submit" type="submit" value="登録する">
  </dl>
</form>    
@endsection