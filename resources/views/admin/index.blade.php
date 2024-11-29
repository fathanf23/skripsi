<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sentimen</title>
</head>
<body>
    <h1>Hai {{ Auth::user()->name }}! Data Sentimen Pelanggan</h1>
    </form>
    <form action="{{ route('logout') }}" method="POST">
    @csrf <!-- Token CSRF untuk keamanan -->
    <button type="submit">Logout</button>
</form>
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
    <div class="container">
        <h1>Dashboard Admin</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Sentimen Positif</div>
                    <div class="card-body">
                        <h2>{{ $positifCount }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Sentimen Negatif</div>
                    <div class="card-body">
                        <h2>{{ $negatifCount }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Sentimen Netral</div>
                    <div class="card-body">
                        <h2>{{ $netralCount }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
