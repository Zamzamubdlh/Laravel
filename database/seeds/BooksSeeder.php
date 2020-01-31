<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['judul'=>'Sebuah Sandiwara Dalam 14 Babak Kenarok', 'pengarang'=>'Saini K.M.', 'penerbit'=>'Balai Pustaka', 'tahun_terbit'=>2000, 'kategori_buku'=>'Fiksi', 'harga'=>100000, 'jumlah_halaman'=>102],
            ['judul'=>'Wanita Teladan Dari Gunung Kapur', 'pengarang'=>'Adhi Surya', 'penerbit'=>'Karuna', 'tahun_terbit'=>2009, 'kategori_buku'=>'Fiksi', 'harga'=>89000, 'jumlah_halaman'=>52],
            ['judul'=>'Filosofi Teras: Filsafat Yunani-Romawi Kuno Untuk Mental Tangguh Masa Kini', 'pengarang'=>'Henry Manampiring', 'penerbit'=>'Kompas ', 'tahun_terbit'=>2018, 'kategori_buku'=>'Pengembangan Diri', 'harga'=>98000, 'jumlah_halaman'=>200],
            ['judul'=>'BUCKET LIST', 'pengarang'=>'PANDHU WASKITHA', 'penerbit'=>'Bukune ', 'tahun_terbit'=>2016, 'kategori_buku'=>'Drama', 'harga'=>55000, 'jumlah_halaman'=>196],
            ['judul'=>'Bung Karno Penyambung Lidah Rakyat Indonesia Ed. Revisi', 'pengarang'=>'Cindy Adams', 'penerbit'=>'media pressindo ', 'tahun_terbit'=>2014, 'kategori_buku'=>'Sosial-Politik', 'harga'=>150000, 'jumlah_halaman'=>432],
            ['judul'=>'Kembara Rindu', 'pengarang'=>'Habiburrahman El Shirazy', 'penerbit'=>'Republika', 'tahun_terbit'=>2019, 'kategori_buku'=>'Islam', 'harga'=>60000, 'jumlah_halaman'=>112],
            ['judul'=>'Anatomi Rasa', 'pengarang'=>'Ayu Utami', 'penerbit'=>'Kpg', 'tahun_terbit'=>2019, 'kategori_buku'=>'Sastra', 'harga'=>70000, 'jumlah_halaman'=>296],
            ['judul'=>'Bicara Itu Ada Seninya', 'pengarang'=>'Oh Su Hyang', 'penerbit'=>'Bhuana Ilmu Populer', 'tahun_terbit'=>2018, 'kategori_buku'=>'Pengembangan Diri', 'harga'=>67000, 'jumlah_halaman'=>256],
            ['judul'=>'Cinta Dalam 99 Nama-Mu ', 'pengarang'=>'Asma Nadia', 'penerbit'=>'Republika', 'tahun_terbit'=>2016, 'kategori_buku'=>'Islam', 'harga'=>65000, 'jumlah_halaman'=>308],
            ['judul'=>'Sebuah Seni untuk Bersikap Bodo Amat', 'pengarang'=>'Mark Manson', 'penerbit'=>'Gramedia Pustaka Utama', 'tahun_terbit'=>2018, 'kategori_buku'=>'Pengembangan Diri', 'harga'=>67000, 'jumlah_halaman'=>256],
            ];
            // masukkan data ke database
            DB::table('Books')->insert($data);
    }
}
