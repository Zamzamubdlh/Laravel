<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>Daftar Tabungan</center> <br>
    @foreach($tabungan as $val )
        Nis : {{$val->nis}} <br>
        Nama : {{$val->nama}} <br>
        Kelas : {{$val->kelas}} <br> 
        Jumlah : {{$val->jumlah}} <br>
        @if ($val -> jumlah >= 50000)
            Jenis Paket : Paket A
        @elseif ($val -> jumlah >= 25000)
            Jenis Paket : Paket B
        @elseif ($val -> jumlah >= 10000)
            Jenis Paket : Paket C
        @else
        Jenis Paket : -
        @endif


        <hr>
    @endforeach

</body>
</html>