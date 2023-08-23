<x-layout>
    <div class="category-edit">
        <h2>No{{ $category->id }} カテゴリー編集</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="input-group">
                <label for="name">カテゴリー名</label>
                <input type="text" id="name" name="name" value="{{ $category->name }}">
            </div>

            <div class="actions">
                <a href="{{ route('categories.index') }}" class="btn">戻る</a>
                <button type="submit" class="btn btn-blue">修正</button>
            </div>
        </form>

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
