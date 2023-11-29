<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(
            [
                'nama_jurusan' => "SMP",
                "type" => "Sekolah Mengengah"
            ],

        );
        DB::table('category')->insert(
            [
                "nama_jurusan" => "Teknik Komputer Jaringan",
                "type" => "Sekolah Menengah Kejuruan"
            ]
        );
        DB::table('category')->insert(
            [
                "nama_jurusan" => "Teknik Kendaraan Ringan",
                "type" => "Sekolah Menengah Kejuruan"
            ]
        );
    }
}
