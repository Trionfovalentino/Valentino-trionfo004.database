@props(['article'])

<div class="card h-100 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">{{ $article['title'] }}</h5>
        <p class="card-text text-muted">{{ $article['description'] }}</p>
        <a href="{{ route('articles.show', ['id' => $article['id']]) }}" class="btn btn-primary btn-sm">Leggi di più</a>
    </div>
</div>