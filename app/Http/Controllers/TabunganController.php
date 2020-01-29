<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungan = Tabungan::all();
        return $tabungan;
    }

    public function show($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return $tabungan;
    }

    public function store($nis, $nama, $kelas, $jumlah)
    {
        $tabungan = new Tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jumlah = $jumlah;
        $tabungan->save(); 
        return $tabungan;
    }
    public function update($id, $nis, $nama, $kelas, $jumlah)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jumlah = $jumlah;
        $tabungan->save(); 
        return $tabungan;
    }

    public function delete($id)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->delete();
        return $tabungan;
    }
}
