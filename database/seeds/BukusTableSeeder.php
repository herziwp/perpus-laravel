<?php

use Illuminate\Database\Seeder;

class BukusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::insert([
            [
              'id'  			=> 1,
              'judul'  			=> 'Belajar Pemrograman Java',
              'isbn'			=> '9920392749',
              'pengarang' 		=> 'Abdul Kadir',
              'penerbit'		=> 'PT. Restu Ibu',
              'tahun_terbit'	=> 2018,
              'jumlah_buku'		=> 20,
              'deskripsi'		=> 'Buku Pertama Belajar Pemrograman Java Utk Pemula',
              'lokasi'			=> 'rak1',
              'cover'			=> 'buku_java.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'judul'  			=> 'Pemrograman Android',
              'isbn'			=> '9920395559',
              'pengarang' 		=> 'Muhammad Nurhidayat',
              'penerbit'		=> 'PT. Restu Guru',
              'tahun_terbit'	=> 2018,
              'jumlah_buku'		=> 14,
              'deskripsi'		=> 'Jurus Rahasia Menguasai Pemrograman Android',
              'lokasi'			=> 'rak2',
              'cover'			=> 'jurus_rahasia.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 3,
              'judul'  			=> 'Android Application',
              'isbn'			=> '9920392000',
              'pengarang' 		=> 'Dina Aulia',
              'penerbit'		=> 'PT. Restu Ayah',
              'tahun_terbit'	=> 2018,
              'jumlah_buku'		=> 5,
              'deskripsi'		=> 'Buku Pertama Belajar Pemrograman Java Utk Pemula',
              'lokasi'			=> 'rak2',
              'cover'			=> 'create_your.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
