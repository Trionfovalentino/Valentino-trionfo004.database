<x-layout title="Tutti gli Articoli">
    <h1 class="mb-4">Tutti gli Articoli</h1>
    <div class="row g-4">
        @foreach($articles as $article)
            <div class="col-md-4">
                <x-card :article="$article" />
            </div>
        @endforeach
    </div>
</x-layout>