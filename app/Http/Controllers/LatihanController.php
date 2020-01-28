<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // Controller 1 Method
    public function halo()
    {
        return 'Halo Nama Saya Zamzam Ubaidilah';
    }
    // Controlle 4 Method
    public function tambah()
    {
        $a=20; $b=10;
        $c = $a + $b;
        return "$a + $b = $c";
    }

    public function kurang()
    {
        $a=20; $b=10;
        $c = $a - $b;
        return "$a - $b = $c";
    }

    public function bagi()
    {
        $a=20; $b=10;
        $c = $a / $b;
        return "$a /$b = $c";
    }

    public function kali()
    {
        $a=10; $b=10;
        $c = $a * $b;
        return "$a * $b = $c";
    }

    // Controller Operator Aritmatika
    public function pertambahan($bil=null,$bil1=null)
    {
        if (!$bil) {
            echo "Silahkan Isi Agka Yang Ingin di Hitung";
        }
        elseif (!$bil1) {
            echo "Silahkan Masukan 1 Angka Lagi ";
        }
        elseif (isset($bil) && isset($bil)) {
            $jml=$bil+$bil1;
        return "Hasil Nya Adalah : $bil + $bil1 = $jml";
        }
        
    }
    public function pengurangan($bil=null,$bil1=null)
    {
        if (!$bil) {
            echo "Silahkan Isi Agka Yang Ingin di Hitung";
        }
        elseif (!$bil1) {
            echo "Silahkan Masukan 1 Angka Lagi ";
        }
        elseif (isset($bil) && isset($bil)) {
            $jml=$bil-$bil1;
            return "Hasil Nya Adalah : $bil - $bil1 = $jml";
        }
    }
    public function pembagian($bil=null,$bil1=null)
    {
        if (!$bil) {
            echo "Silahkan Isi Agka Yang Ingin di Hitung";
        }
        elseif (!$bil1) {
            echo "Silahkan Masukan 1 Angka Lagi ";
        }
        elseif (isset($bil) && isset($bil)) {
            $jml=$bil/$bil1;
        return "Hasil Nya Adalah : $bil / $bil1 = $jml";
        }
    }
    public function perkalian($bil=null,$bil1=null)
    {
        if (!$bil) {
            echo "Silahkan Isi Agka Yang Ingin di Hitung";
        }
        elseif (!$bil1) {
            echo "Silahkan Masukan 1 Angka Lagi ";
        }
        elseif (isset($bil) && isset($bil)) {
            $jml=$bil*$bil1;
        return "Hasil Nya Adalah : $bil * $bil1 = $jml";
        }
        
    }
    
    // Constroller Loop 1
    public function loop1()
    {
        $data = [
            ['Nama'=>'Zamzam Ubaidilah','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
            ['Nama'=>'Qaysa','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
            ['Nama'=>'Romi','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
            ['Nama'=>'Fadlan','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
        ];
        //dd($data);
        foreach($data as $val => $key)
        {
            echo"Nama               : ". $key['Nama'].
                " <br> Kelas        : ". $key['Kelas'].
                " <br> Uang_Jajan   : ". $key['uang_jajan'].
                "<hr>"; 
        }
    }

    // Constroller Loop 2
    public function loop2()
    {
        $data =[['nama' =>'Zamzam Ubaidilah','kelas'=>'RPL 1', 'uangjajan'=>10000],
                ['nama' =>'Memet','kelas'=>'RPL 2', 'uangjajan'=>50000],
                ['nama' =>'Restu','kelas'=>'RPL 3', 'uangjajan'=>30000],
                ['nama' =>'David','kelas'=>'RPL 4', 'uangjajan'=>15000],
                ['nama' =>'Riz','kelas'=>'RPL 5', 'uangjajan'=>5000]
                ];
        
        foreach ($data as $val => $key) {
            if ($key['uangjajan']>=50000) {
                $ta=$key['uangjajan']*25/100;
                $total=$key['uangjajan']-$ta;
            }
            elseif ($key['uangjajan']>=25000) {
                $ta=$key['uangjajan']*15/100;
                $total=$key['uangjajan']-$ta;
            }
            elseif ($key['uangjajan']>=10000) {
                $ta=$key['uangjajan']*10/100;
                $total=$key['uangjajan']-$ta;
            }else {
                $ta=0;
                $total=$key['uangjajan'];
            }
            echo "Nama : ".$key['nama'].
            "<br>Kelas : ".$key['kelas'].
            "<br>Uang Jajan : ".$total.
            "<br>Uang Tabungan : ".$ta.
            "<br>Total Uang Jajan  : ".$key['uangjajan']. 
            "<hr>";
        }
    }

    // Constroller Loop 3
    public function loop3()
    {
        $data =[['nama' =>'Zamzam Ubaidilah','agama'=>'Islam','alamat'=>'Bandung','jenis_kelamin'=>'Laki-laki', 'Jabatan'=>'Manager','jam_kerja'=>300],
                ['nama' =>'Tiara','agama'=>'Islam','alamat'=>'Jakarta','jenis_kelamin'=>'Perempuan', 'Jabatan'=>'Sekretaris', 'jam_kerja'=>100],
                ['nama' =>'Rafli','agama'=>'Islam','alamat'=>'Bekasi','jenis_kelamin'=>'Laki-laki', 'Jabatan'=>'Staff', 'jam_kerja'=>255],
                ['nama' =>'Putri','agama'=>'Islam','alamat'=>'Bogor','jenis_kelamin'=>'Perempuan', 'Jabatan'=>'Sekretaris', 'jam_kerja'=>220],
                ['nama' =>'Riz','agama'=>'Islam','alamat'=>'Bojong','jenis_kelamin'=>'Laki-laki', 'Jabatan'=>'Staff', 'jam_kerja'=>200]
                ];
        foreach ($data as $key => $value) {
                if ($value['Jabatan']=='Manager') {
                    $Gaji=5000000;
                if ($value['jam_kerja'] >=250) {
                    $bonus=$Gaji/10;
                }
                elseif ($value['jam_kerja'] >=200) {
                    $bonus=$Gaji*5/1000;
                }else {
                    $bonus=0;
                }
                $gaji_bersih = $Gaji+$bonus;
                $potongan=$gaji_bersih*2.5/100;
                $gt=$gaji_bersih-$potongan;
                }
                elseif ($value['Jabatan']=='Sekretaris') {
                    $Gaji=3500000;
                if ($value['jam_kerja'] >=250) {
                    $bonus=$Gaji/10;
                }
                elseif ($value['jam_kerja'] >=200) {
                    $bonus=$Gaji*5/100;
                }else {
                    $bonus=0;
                }
                $gaji_bersih = $Gaji+$bonus;
                $potongan=$gaji_bersih*2.5/100;
                $gt=$gaji_bersih-$potongan;
                }
                elseif ($value['Jabatan']=='Staff') {
                    $Gaji=2500000;
                if ($value['jam_kerja'] >=250) {
                    $bonus=$Gaji/10;
                }
                elseif ($value['jam_kerja'] >=200) {
                    $bonus=$Gaji*5/100;
                }else {
                    $bonus=0;
                }
                $gaji_bersih = $Gaji+$bonus;
                $potongan=$gaji_bersih*2.5/100;
                $gt=$gaji_bersih-$potongan;
                }
                echo "Nama : ".$value['nama'].
                "<br>Agama : ".$value['agama'].
                "<br>Alamat : ".$value['alamat'].
                "<br>Jenis Kelamin : ".$value['jenis_kelamin'].
                "<br>Jabatan : ".$value['Jabatan'].
                "<br>Jam kerja : ".$value['jam_kerja'].
                "<br>Gaji : ".$Gaji.
                "<br>Bonus : ".$bonus.
                "<br>Potongan : ".$potongan.
                "<br>Gaji Total : "." Rp . " . $gt.
                "<hr>";
        }
    }
}