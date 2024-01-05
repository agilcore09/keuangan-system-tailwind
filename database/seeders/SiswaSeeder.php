<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert(
            [
                "gambar" => "marsha.jpg",
                "nama_siswa" => "Marsha Lanathea Lapian",
                "nis" => 222006,
                "nisn" => 222006,
                "kelas" => "TI A",
                "category_id" => 1,
                "type_id" => 1
            ]
        );
        DB::table('siswa')->insert(
            [
                "gambar" => "gracia.jpg",
                "nama_siswa" => "Shania Gracia",
                "nis" => 222007,
                "nisn" => 222007,
                "kelas" => "TI A",
                "category_id" => 2,
                "type_id" => 2
            ]
        );
        DB::table('siswa')->insert(
            [
                "gambar" => "zee.jpeg",
                "nama_siswa" => "Azizi Shafa Asadel",
                "nis" => 222008,
                "nisn" => 222008,
                "kelas" => "TI A",
                "category_id" => 3,
                "type_id" => 3
            ]
        );
    }
}
