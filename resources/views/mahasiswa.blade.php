<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>DAFTAR MAHASISWA</h1>
        <table>
            <tr><th>Nama</th><th>Alamat</th><th>Gender</th></tr>
            @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $m['nama'] }}</td>
                <td>{{ $m['alamat'] }}</td>
                <td>{{ $m['gender'] }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
