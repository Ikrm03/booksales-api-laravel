<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <h1>Ini adalah halaman buku</h1>
    <p>Ini adalah halaman buku yang menampilkan daftar buku yang tersedia.</p>


    @foreach ($books as $item)
      <ul>
        <li><strong>Judul:</strong> {{ $item->title }}</li>
        <li><strong>Deskripsi:</strong> {{ $item->description }}</li>
        <li><strong>Harga:</strong> Rp {{ $item->price }}</li>
        <li><strong>Stok:</strong> {{ $item->stock }}</li>
      </ul>  
    @endforeach

    {{-- @foreach ($books as $item)
      <ul>
        <li>{{ $item['title'] }}</li>
        <li>{{ $item['description'] }}</li>
        <li>{{ $item['price'] }}</li>
        <li>{{ $item['stock'] }}</li>
      </ul>  
    @endforeach --}}
</body>
</html>