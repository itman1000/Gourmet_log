<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Log</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container-body">
        <aside class="sidebar">
            <h1>Gourmet Log</h1>
            <ul class="menu">
                <li>MENU</li>
                <li><a href="/restaurants">お店リスト</a></li>
                <li><a href="/restaurants/create">お店登録／編集</a></li>
                <li><a href="/categories">カテゴリー管理</a></li>
                <li>
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <li><button class="logout_button" type="submit">ログアウト</button></li>
                    </form>
                </li>
            </ul>
            <footer>
                <p>エックス</p>
            </footer>
        </aside>

        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
