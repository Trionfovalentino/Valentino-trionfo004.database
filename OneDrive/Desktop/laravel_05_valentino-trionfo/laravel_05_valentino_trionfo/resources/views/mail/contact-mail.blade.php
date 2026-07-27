<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Messaggio dal Sito</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">
    <h2>Hai ricevuto un nuovo messaggio dal sito</h2>
    <p><strong>Nome:</strong> {{ $userData['name'] }}</p>
    <p><strong>Email:</strong> {{ $userData['email'] }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $userData['message'] }}</p>
</body>
</html>