<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Log</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-left">
                {{ $title }}
            </div>
            <div class="header-right">
                <a href="{{ route('auth.login') }}">ログイン</a>
                <a href="{{ route('auth.register') }}">新規登録</a>
            </div>
        </div>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
