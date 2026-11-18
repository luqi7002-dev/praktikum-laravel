<!DOCTYPE html>
<html>
<head>
    <title>Luas Segitiga</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Luas Segitiga</h1>
        <form action="/kalkulator/segitiga/proses" method="POST">
            @csrf
            <input type="number" name="alas" placeholder="Alas" value="{{ $alas ?? '' }}" required>
            <input type="number" name="tinggi" placeholder="Tinggi" value="{{ $tinggi ?? '' }}" required>
            <button type="submit">Hitung</button>
        </form>

        @isset($luas)
        <p class="hasil">Luas = 1/2 x {{ $alas }} x {{ $tinggi }} = <b>{{ $luas }}</b></p>
        @endisset
    </div>
</body>
</html>
