<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Il Mio Blog' }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    <x-navbar />

    <main class="container my-5=flex-grow-1">
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>