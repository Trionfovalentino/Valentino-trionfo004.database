<x-layout title="Homepage - TechBlog">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
        <h1 class="display-4 fw-bold">Benvenuto su TechBlog</h1>
        <p class="lead">Progetto con invio email gestito tramite Controller, Mailable e Mailtrap.</p>
        <a href="{{ route('contact.form') }}" class="btn btn-primary btn-lg mt-3">Vai al Form di Contatto</a>
    </div>
</x-layout>