<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            ['title'=>'Tips Cepat nikah', 'content'=>'lorem ipsum'],
            ['titel'=>'Haruslah Menunda Nikah?', 'content'=>'lorem ipsum'],
            ['titel'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']

        ];

        // masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}