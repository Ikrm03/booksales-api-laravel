<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Penulis (Author)</title>
</head>
<body>
    <h1>Daftar Author Buku</h1>

    @foreach ($authors as $item)
        <ul>
            <li><strong>Nama:</strong> {{ $item['name'] }}</li>
            <li><strong>Bio:</strong> {{ $item['bio'] }}</li>
        </ul>
        <hr>
    @endforeach
</body>
</html>