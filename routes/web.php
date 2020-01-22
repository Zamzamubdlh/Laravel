<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
return '<h1>Halo</h1>'
.'Selamat datang di webapp saya<br>'
.'Laravel, emang keren.';
});


// Route Basic
Route::get('halo',function()
{
    return 'Halo Ini Aplikasi Laravel Pertama Saya'.
    '<br> Laravel is Migical Framework';
});


// Route Parameter Biodata
Route::get('biodata/{nama}',function($a)
{
    return 'Halo Ini Biodata '.$a;
});
// Route Parameter Biodata
Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}',function($nama,$alamat,$sekolah,$umur)
{
    return  'Nama : '.$nama.
            '<br> Alamat : '.$alamat.
            '<br> Sekolah : '.$sekolah.
            '<br> Umur : '.$umur;
});


// Dasar Laravel
// Nama
Route::get('Nama',function()
{
    return 'Nama saya Zamzam Ubaidilah';
});

// Umur
Route::get('umur',function()
{
    return 'Umur saya 17 tahun';
});

// Alamat
Route::get('alamat',function()
{
    return 'Alamat saya Garut';
});

// Sekolah
Route::get('sekolah',function()
{
    return 'Saya sekolah di SMK ASSALAAM BANDUNG';
});

// Alamat
Route::get('jurusan',function()
{
    return 'Saya Di SMK ASSALAM BANDUNG mengambil jurusan RPL';
});