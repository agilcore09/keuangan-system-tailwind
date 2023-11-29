<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->insert(
            [
                "type_name" => "Siswa Biasa",
            ]
        );
        DB::table('type')->insert(
            [
                "type_name" => "Panti Asuhan",
            ]
        );
        DB::table('type')->insert(
            [
                "type_name" => "Ketua Osis",
            ]
        );
    }
}
