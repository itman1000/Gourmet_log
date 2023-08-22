<x-toplayout>
    <x-slot name="title">
        Gourmet Log
    </x-slot>

    <div class="container">
        <div class="container-register">
            <h2>ユーザー登録</h2>
            <form action="{{ route('auth.register') }}" method="post">
                @csrf
                <div>
                    <label>名前</label>
                    <input type="text" name="name" value="{{ old('name')}}">
                </div>
                <div>
                    <label>メールアドレス</label>
                    <input type="text" name="email" value="{{ old('email')}}">
                </div>
                <div>
                    <label>パスワード</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <label>確認用パスワード</label>
                    <input type="password" name="password_confirmation">
                </div>
                <div>
                    <button type="submit" class="register-button">登録</button>
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
    </div>

</x-toplayout>
