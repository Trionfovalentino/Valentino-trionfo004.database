<x-layout title="Homepage - Il Mio Blog">
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Benvenuto nel Blog!</h1>
        <p class="col-md-8 fs-4 mx-auto">Scopri i nostri ultimi articoli dedicati al mondo dello sviluppo web.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('articles.index') }}">Vedi tutti gli articoli</a>
    </div>
</x-layout>