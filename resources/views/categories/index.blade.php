<x-layout>
    <div class="container-categories">
        <h2>カテゴリー管理</h2>

        <form action="{{ route('categories.store') }}" method="POST" class="new-category-form">
            @csrf
            <div class="label-box">
                <label for="new-category">新規カテゴリー<span>*</span></label>
            </div>
            <input type="text" name="name" id="new-category" placeholder="新規カテゴリー名を入力">
            <button type="submit" class="category-button">登録</button>
        </form>

        <table class="category-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>カテゴリー</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="edit-btn">
                            <a href="{{ route('categories.edit', $category->id) }}">編集</a>
                        </div>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('本当にこのカテゴリを削除しますか？');">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</x-layout>
