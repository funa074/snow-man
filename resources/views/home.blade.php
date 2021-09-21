@extends('layouts.app')


@section('content')
<h1 class="welcome-title">スキー場を探す</h1>
<div class="ski-resort-list">
    <a href="" class="flex ski-resort">鷲ヶ岳スキー場</a>
    <a href="" class="flex ski-resort">めいほうスキー場</a>
    <a href="" class="flex ski-resort">ダイナランド</a>
    <a href="" class="flex ski-resort">ホワイトピアたかす</a>
    <a href="" class="flex ski-resort">高鷲スノーパーク</a>
    <a href="" class="flex ski-resort">ウィングヒルズ白鳥リゾート</a>
</div>
    
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メッセージ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインしました。
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
