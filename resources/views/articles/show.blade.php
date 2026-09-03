<x-layout>
    <div class="container my-5">
        <h1>{{ $article->title }}</h1>
        <h4 class="text-muted mb-4">{{ $article->subtitle }}</h4>

        @if($article->image)
            <img src="{{ Storage::url($article->image) }}" class="img-fluid mb-4 rounded" alt="{{ $article->title }}">
        @endif

        <div class="mt-3">
            <p>{{ $article->content }}</p>
        </div>

        <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-3">Torna agli articoli</a>
    </div>
</x-layout>