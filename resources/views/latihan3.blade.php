<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Data Tabungan Perorangan</center>
    Nama : {{$tabungan->nama}} <br>
    Nis : {{$tabungan->nis}} <br>
    Kelas : {{$tabungan->kelas}} <br>
    Jumlah : {{$tabungan->jumlah}} <br>
    @if($tabungan->jumlah > 50000)
    Paket Tabungan : A
    @elseif($tabungan->jumlah > 100000)
    Paket Tabungan : B
    @else
    Paket Tabungan : C
    @endif
</body>
</html>