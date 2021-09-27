@extends('layouts.app')


@section('content')
<h1 class="ski-resort-search">スキー場を探す</h1>
<div class="ski-resort-list">
    @foreach($ski_resorts as $ski_resort)
        <a href="{{ url('/ski-resort') }}" class="flex ski-resort">
            {{ $ski_resort->name }}
        </a>
        <br>
    @endforeach
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
{{-- <div class="snow">●</div>  --}}
