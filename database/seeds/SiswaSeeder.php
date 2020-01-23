<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
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
            ['nama'=>'Zamzam Ubaidilah', 'nis'=>'0012345', 'jenis_kelamin'=>'Laki-Laki
            ', 'alamat'=>'Tarate Mekar', 'tgl_lahir'=>'2003-06-11', 'umur'=>17],
            ['nama'=>'Rijal', 'nis'=>'00123456', 'jenis_kelamin'=>'Laki-Laki
            ', 'alamat'=>'Bandung Ciamis', 'tgl_lahir'=>'2003-05-01', 'umur'=>17],
            ['nama'=>'Romi', 'nis'=>'001234567', 'jenis_kelamin'=>'Laki-Laki
            ', 'alamat'=>'Pangalengan', 'tgl_lahir'=>'2003-01-18', 'umur'=>18],
            ['nama'=>'Rafli', 'nis'=>'0012345678', 'jenis_kelamin'=>'Laki-Laki
            ', 'alamat'=>'Sadang', 'tgl_lahir'=>'2003-01-13', 'umur'=>17],
            ['nama'=>'Karlina', 'nis'=>'00123456789', 'jenis_kelamin'=>'Perempuan
            ', 'alamat'=>'Garut', 'tgl_lahir'=>'2003-08-14', 'umur'=>17],
        ];
        // masukkan data ke database
        DB::table('siswa')->insert($data);
    }
}
