<x-layout :title="$article['title']">
    <div class="bg-light p-4 rounded shadow-sm">
        <h1 class="mb-3">{{ $article['title'] }}</h1>
        <p class="text-muted fs-5">{{ $article['description'] }}</p>
        <hr>
        <p class="mt-4">{{ $article['content'] }}</p>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-3">&leftarrow; Torna agli articoli</a>
    </div>
</x-layout>