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
    
    @if ( !empty( $record_values->image_file_name ))
      <div class="record-img">
        <img src="{{ asset("storage/img/".$record_values->image_file_name) }}" alt="" style="width: 300px">
        <button id="img-change" class="img-change" type="button">画像を変更する</button>
      </div>
      
      <div class="img-input-hidden">
        <dt><label class="label" for="img">画像選択</label><p class="any2">※任意</p></dt>
        <dd><input type="file" name="img" id="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></dd>
      </div>
    @else
      <div class="img-input">
        <dt><label class="label" for="img">画像選択</label><p class="any2">※任意</p></dt>
        <dd><input type="file" name="img" id="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></dd>
      </div>
    @endif
    <input class="edit-submit" type="submit" value="変更する">

  </dl>
</form>    
@endsection

<script>
  window.addEventListener("DOMContentLoaded", () => { // ページの読み込みが終わったら実行
    const button = document.querySelector("#img-change");
    button.addEventListener("click", () => {
      const img = document.querySelector(".record-img");
      img.classList.add("active");
      const imgInput = document.querySelector(".img-input-hidden");
      imgInput.classList.add("active");
    })
  })
</script>