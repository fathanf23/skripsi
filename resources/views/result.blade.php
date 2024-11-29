<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Sentimen</title>
</head>
<body>
    <h1>Hasil Klasifikasi Sentimen</h1>
    <p><strong>Ulasan:</strong> {{ $inputText }}</p>
    <p><strong>Sentimen:</strong> {{ ucfirst($prediction) }}</p>

    <a href="{{ route('sentiment') }}">Kembali</a>
    <a href="{{ route('index') }}">lihat semua ulasan</a>
</body>
</html>
