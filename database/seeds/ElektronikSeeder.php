<?php

use Illuminate\Database\Seeder;

class ElektronikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['nama_pembeli'=>'Zamzam Ubaidilah', 'membeli_barang'=>'laptop', 'merk_barang'=>'Asus', 'garansi_barang'=>'Dua Tahun', 
            'harga_barang'=> 4000000, 'alamat_pembeli'=>'Garut', 'tgl_pembelian'=>'2020-01-24'],
            ['nama_pembeli'=>'Ahmad Rizal', 'membeli_barang'=>'Televisi', 'merk'=>'LG', 'garansi_barang'=> 'Lima Tahun',
            'harga_barang'=> 2500000, 'alamat_pembeli'=>'Bandung', 'tgl_pembelian'=>'2020-01-25'],
            ['nama_pembeli'=>'Diki', 'membeli_barang'=>'Ac', 'merk_barang'=>'LG', 'garansi_barang'=> 'Tiga Tahun', 
            'harga_barang'=> 4500000, 'alamat_pembeli'=>'Bandung', 'tgl_pembelian'=>'2020-01-26'],
            ['nama_pembeli'=>'Silvana', 'membeli_barang'=>'Setrika', 'merk_barang'=>'Polytron', 'garansi_barang'=> 'Satu Tahun', 
            'harga_barang'=> 3000000, 'alamat_pembeli'=>'Bandung', 'tgl_pembelian'=>'2020-01-27'],
            ['nama_pembeli'=>'Adimas', 'membeli_barang'=>'Kipas Angin', 'merk_barang'=>'Polytron', 'garansi_barang'=> 'Tiga Tahun', 
            'harga_barang'=> 4000000, 'alamat_pembeli'=>'Bandung', 'tgl_pembelian'=>'2020-01-28'],
            ['nama_pembeli'=>'Ajrin', 'membeli_barang'=>'Blender', 'merk_barang'=>'Polytron', 'garansi_barang'=> 'Dua Tahun', 
            'harga_barang'=> 5000000, 'alamat_pembeli'=>'Bandung', 'tgl_pembelian'=>'2020-01-29'],
            ['nama_pembeli'=>'Raiza', 'membeli_barang'=>'Magic Com', 'merk_barang'=>'Philips', 'garansi_barang'=> 'Dua Tahun',
            'harga_barang'=> 2000000, 'alamat_pembeli'=>'Bandung', 'tgl_pembelian'=>'2020-01-30'],
        ];
        // masukkan data ke database
        DB::table('elektronik')->insert($data);
    }
}
