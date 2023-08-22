<x-layout>
    <div class="dashboard">
        <h2>{{ \Carbon\Carbon::now()->format('Y年m月d日') }}</h2>
        <p>{{ $user->name }}さん、こんにちは！</p>
    </div>
</x-layout>
