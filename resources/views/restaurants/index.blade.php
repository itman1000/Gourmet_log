<x-layout>
    <div class="container-shop-index">
        <h2>お店リスト</h2>
        <div class="search-box">
            <input type="text" placeholder="店名やカテゴリで検索..." id="shopSearch">
            <button id="searchBtn">検索</button>
        </div>

        <table class="shop-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>店名</th>
                    <th>カテゴリー</th>
                    <th>レビュー</th>
                    <th>コメント</th>
                    <th>詳細</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{ $restaurant->id }}</td>
                        <td>{{ $restaurant->name }}</td>
                        <td>
                            @foreach($restaurant->categories as $category)
                                {{ $category->name }}
                            @endforeach
                        </td>
                        <td>{{ $restaurant->review }}</td>
                        <td>{{ $restaurant->comment }}</td>
                        <td>
                            <a href="{{ route('restaurants.show', $restaurant->id) }}" class="detail-button">詳細</a>
                        </td>
                        <td>
                            <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="edit-button">編集</a>
                        </td>
                        <td>
                            <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button" onclick="return confirm('本当に削除しますか？');">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</x-layout>
