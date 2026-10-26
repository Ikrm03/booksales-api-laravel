<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>

    @foreach ($genres as $genre)
        <ul>
            <li>{{ $genre['name'] }}</li>
            <li>{{ $genre['description'] }}</li>
        </ul>
        
    @endforeach

    {{-- @foreach ($genres as $item)
        <ul>
            <li><strong>Genre:</strong> {{ $item['name'] }}</li>
            <li><strong>Deskripsi:</strong> {{ $item['description'] }}</li>
        </ul>
        <hr>
    @endforeach --}}
</body>
</html>