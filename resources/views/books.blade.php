<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <center>Daftar Books</center> <br>
    @foreach($data as $val )
        Judul           : {{$val->judul}} <br>
        Pengarang       : {{$val->pengarang}} <br>
        Penerbit        : {{$val->penerbit}} <br> 
        Tahun Terbit    : {{$val->tahun_terbit}} <br>
        Kategori Buku   : {{$val->kategori_buku}} <br>
        Harga           : {{$val->harga}} <br>
        Jumlah Halaman  : {{$val->jumlah_halaman}} <br> 
        <hr>
    @endforeach
</body>
</html>