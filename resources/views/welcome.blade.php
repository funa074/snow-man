<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <h1 class="welcome-title">❄️ SNOW MAN ❄️</h1>
    <p class="welcome-text">
        ゲレンデの天気や気温、積もっている雪の量を確認したり<br>
        自分の滑走履歴を記録しよう！
    </p>

    <div class="welcome-btn flex">
        <a href="{{ route('register') }}" class="btn">新規登録</a>
        <a href="{{ route('login') }}" class="btn">ログイン</a>
    </div>

    <div class="snow">●</div> 
</body>
</html>