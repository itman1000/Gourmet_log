<x-toplayout>
    <x-slot name="title">
        Gourmet Log
    </x-slot>

    <div class="container-box">
        <div class="title-box">
            <h2>ログイン</h2>
        </div>
        <form action="{{ route('auth.login') }}" method="post">
            @csrf
            <div>
                <label>メールアドレス</label>
                <input type="text" name="email">
            </div>
            <div>
                <label>パスワード</label>
                <input type="password" name="password">
            </div>
            <div>
                <input type="checkbox" name="remember"> このブラウザに認証情報を記憶
            </div>
            <div>
                <button class="login_button" type="submit">ログイン</button>
            </div>
        </form>
    </div>
    @if($errors->any())
        <div class="errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</x-toplayout>
