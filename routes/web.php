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

// route basic
Route::get('halo', function () {
    return "Hallo World";
});


Route::get('about', function() {
return '<h1>Halo</h1>'
.'Selamat datang di web app saya<br>'
.'Laravel, emang keren.';
});


// Route Basic
Route::get('halo',function()
{
    return 'Halo Ini Aplikasi Laravel Pertama Saya'.
    '<br> Laravel is Migical Framework';
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


Route::get('about', function () {
    return "<h1>hallo</h1>
            <br>Selamat Datang di web saya!";
});
Route::get('about/profil/nama', function () {
    return "Nama Saya Zamzam Ubaidilah";
});
Route::get('about/profil/kelas', function () {
    return "Saya kelas XI RPL 1";
});
Route::get('about/profil/alamat', function () {
    return "Saya tinggal di Terate Mekar";
});
Route::get('about/profil/umur', function () {
    return "Umur saya 17 tahun";
});
Route::get('about/profil/teman', function () {
    return "Saya memiliki teman";
});


// Route parameter
Route::get('about/profil/nama/{nama}', function ($a) {
    return "Nama Saya $a";
});
Route::get('about/profil/{nama}/{alamat}/{sekolah}/{umur}', function ($nama, $alamat, $sekolah, $umur) {
    return "Nama Saya $nama <br>saya tinggal di $alamat <br>Saya Bersekolah di $sekolah<br>Umur saya $umur Thn";
});


// Route Optional 3 Parameter
Route::get('nama/{nama?}', function ($a = 'Zamzam Ubaidilah') {
    return "Nama Kamu $a";
});

Route::get('pesan/{nama?}/{minum?}/{harga?}', function ($a = null, $b = null, $c = null) {
    if (isset($a)) {
        echo "Anda pesan $a";
    }
    if (isset($b)) {
        echo " & $b";
    }
    if (isset($c)) {
        if ($c >= 35000) {
            $size = "Large";
        } elseif ($c >= 25000) {
            $size = "Medium";
        } elseif ($c >= 0) {
            $size = "Small";
        } else {
            return " Harga Tidak Valid";
        }
        echo " Size $size dengan harga $c";
    }
    if (!$a && !$b) {
        return "Silahkan Pesan dulu";
    }

});

// Route Optional 3 Parameter
Route::get('tes-tni/{nama?}/{bb?}/{umur?}', function ($a = null, $b = null, $c = null) {
    if (isset($a)) {
        echo "Nama Anda $a";
    }
    if (isset($b)) {
        if ($b >= 76 && $b <= 100) {
            $size = "Anda Harus turun Berat badan";
        } elseif ($b >= 65 && $b < 76) {
            $size = "Berat Badan Anda Ideal";
        } elseif ($b >= 50 && $b < 65) {
            $size = "Naikan Berat badan anda ";
        } elseif ($b >= 1 && $b < 50) {
            $size = "Anda kurang Nutrisi";
        } else {
            $size = "Berat badan Tidak Valid";
        }
        echo " $size";
    }
    if (isset($c)) {
        if ($c >= 50 && $c <= 60) {
            $umur = "Jendral";
        } elseif ($c >= 40 && $c < 50) {
            $umur = "Laksamana";
        } elseif ($c >= 30 && $c < 40) {
            $umur = "Perwira";
        } else {
            $umur = " umur Tidak Valid";
        }
        echo " $umur ";
    }
    if (!$a && !$b) {
        return "Silahkan Isi data terlebih dahulu";
    }

});


// Akses Model 
Route::get('testmodel',function()
{
    $query = App\Post::all();
    return $query;
});

Route::get('testmodel/1',function()
{
    $query = App\Post::find(1);
    return $query;
});

Route::get('testmodel/2',function()
{
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

Route::get('testmodel/3',function()
{
    $post= $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('testmodel/4',function()
{
    $query = $post = App\Post::find(1);
    $post->delete();
    return $query;
});

Route::get('testmodel/5',function()
{
    $post = $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
        
    });

// Model Studient
Route::get('testmodel-siswa',function()
{
    $query = App\Siswa::all();
    return $query;
});


// Model elektrik
Route::get('data-tokoelektronik/take3', function ()
{
    $data = App\Elektronik::all()->take(3);
    return $data;
});
Route::get('data-tokoelektronik/select', function ()
{
    $data = App\Elektronik::select('nama_pembeli','membeli_barang','merk_barang', 'garansi_barang')->first();
    return $data;
});
Route::get('data-tokoelektronik/{nama_pembeli}/{membeli_barang}/{merk_barang}/{garansi_barang}/{harga_barang}/{alamat_pembeli}/{tgl_pembelian}', function($nama_pembeli,$membeli_barang,$merk_barang,$garansi_barang,$harga_barang,$alamat_pembeli,$tgl_pembelian) {
    $post = new App\Elektronik;
    $post->nama_pembeli = $nama_pembeli;
    $post->membeli_barang = $membeli_barang;
    $post->merk_barang = $merk_barang;
    $post->garansi_barang = $garansi_barang;
    $post->harga_barang = $harga_barang;
    $post->alamat_pembeli = $alamat_pembeli;
    $post->tgl_pembelian = $tgl_pembelian;
    $post->save();
    return $post;
// check record baru di database
    });

// Controller
Route::get('/', function () {
    return view('welcome');
});

// Controller 1 Method
Route::get('latihan','LatihanController@halo');

// Controller 4 Method
Route::get('tambah','LatihanController@tambah');
Route::get('kurang','LatihanController@kurang');
Route::get('bagi','LatihanController@bagi');
Route::get('kali','LatihanController@kali');

//Controller Operator Aritmatika
Route::get('pertambahan/{a?}/{b?}','LatihanController@pertambahan');
Route::get('perkurangan/{a?}/{b?}','LatihanController@perkurangan');
Route::get('pembagian/{a?}/{b?}','LatihanController@pembagian');
Route::get('perkalian/{a?}/{b?}','LatihanController@perkalian');

// Controller Loop1
Route::get('/data-1','LatihanController@loop1');    

// Controller Loop2
Route::get('/data-2','LatihanController@loop2');

// Controller Gaji Perkantoran
Route::get('/data-3','LatihanController@loop3');
