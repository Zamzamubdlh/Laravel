<?php

namespace App\Http\Controllers;
use App\Tabungan;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $data1 = "Zamzam Ubaidilah";
        $data2 = "Riz";
        return view('latihan',compact('data1','data2'));
    }

    public function pass1()
    {
        $siswa = [
            ['nama'=>'Zamzam Ubaidilah','kelas'=>'XI-RPL 1'],
            ['nama'=>'Riz','kelas'=>'XI-RPL 2'],
        ];
        // dd($siswa);
        return view('latihan1',['data'=>$siswa]);
    }

    public function pass2()
    {
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2',compact('tabungan'));
    }

}
