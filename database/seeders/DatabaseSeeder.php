<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PembayaranModel;
use App\Models\SiswaModel;
use Database\Factories\PembayaranFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'root@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $this->call([
            JurusanSeeder::class,
        ]);
        $this->call([
            TypeSeeder::class,
        ]);
        $this->call([
            SiswaSeeder::class,
        ]);

        PembayaranModel::factory()->count(50)->create();
    }
}
