<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sentimen</title>
</head>
<body>
    <h1>Data Sentimen Pelanggan</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ulasan</th>
            <th>Sentimen</th>
            <th>Waktu</th>
        </tr>
        @foreach ($sentiments as $sentiment)
            <tr>
                <td>{{ $sentiment->id }}</td>
                <td>{{ $sentiment->review }}</td>
                <td>{{ ucfirst($sentiment->sentiment) }}</td>
                <td>{{ $sentiment->created_at }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('sentiment.form') }}">Kembali ke Form</a>
</body>
</html>
