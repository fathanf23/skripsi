<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentiment Analysis</title>
</head>
<body>
    <h1>Analisis Sentimen</h1>

    <p>Selamat datang, {{ Auth::user()->name }}!</p>

    <form action="{{ route('classify') }}" method="POST">
        @csrf
        <label for="review">Masukkan Ulasan:</label>
        <input type="text" id="review" name="review" required>
        <button type="submit">Klasifikasi</button>
    </form>
    <form action="{{ route('logout') }}" method="POST">
    @csrf <!-- Token CSRF untuk keamanan -->
    <button type="submit">Logout</button>
</form>
</body>
</html>
