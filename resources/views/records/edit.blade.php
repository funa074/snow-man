@extends('layouts.app')

@section('content')
<form action="/record-update/{{ $record_values->id }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <dl class="record-post flex">

    @if ($errors->any())
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    @endif
    
    <dt><label class="label" for="date">滑走日</label><p class="mandatory-date">*</p></dt>
    <dd><input class="inputs date" id="date" type="date" required="required" name="date" value={{ $record_values->date }}></dd>
  
    <dt><label class="label" for="ski-resort">スキー場名</label><p class="mandatory-ski-resort">*</p></dt>
    <dd><input class="inputs text" id="ski-resort" type="text" required="required" name="ski_resort" maxlength="30" value={{ $record_values->ski_resort }}></dd>
  
    <dt><label class="label" for="text">本文</label><p class="any-text">※任意</p></dt>
    <dd><textarea class="inputs textarea" id="text" name="body" maxlength="21845">{{ $record_values->body }}</textarea></dd>
    
    @if ( !empty( $record_values->image_file_name ))
      <div class="record-img flex">
        <img src="{{ asset("storage/img/".$record_values->image_file_name) }}" alt="" style="width: 300px">
        <div class="flex img-button-Wrapper">
          <button id="img-change" class="img-button" type="button">画像を変更</button>
          <button class="img-button" type="submit">
            <label id="img-delete" class="img-delete">画像を削除</label>
            <input id="is_file_delete" name="img_delete" type="hidden" />
          </button>
        </div>
      </div>
      
      <div class="img-input-hidden">
        <dt><label class="label" for="img">画像選択</label><p class="any-img">※任意</p></dt>
        <dd><input type="file" name="img" id="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></dd>
      </div>
    @else
      <div class="img-input">
        <dt><label class="label" for="img">画像選択</label><p class="any-img">※任意</p></dt>
        <dd><input type="file" name="img" id="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></dd>
      </div>
    @endif
    <input class="edit-submit" type="submit" value="変更する">

  </dl>
</form>    
@endsection

<script>
  // 画像変更ボタンがclickされたら画像選択画面を表示
  window.addEventListener("DOMContentLoaded", () => { // ページの読み込みが終わったら実行
    const button = document.getElementById("img-change");
    button.addEventListener("click", () => {
      const recordImg = document.querySelector(".record-img");
      recordImg.classList.add("hidden");
      const imgInput = document.querySelector(".img-input-hidden");
      imgInput.classList.add("active");
    })
  })

  //画像削除ボタンがclickされたら画像要素を削除
  window.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("img-delete");
    const inputAsHidden = document.getElementById("is_file_delete");
    button.addEventListener("click", () => {
      inputAsHidden.value = true;
      const recordImg = document.querySelector(".record-img");
      recordImg.classList.add("hidden");
      const imgInput = document.querySelector(".img-input-hidden");
      imgInput.classList.add("active");
    });
  });
</script>