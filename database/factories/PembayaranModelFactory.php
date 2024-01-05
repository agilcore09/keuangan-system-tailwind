<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PembayaranModel>
 */
class PembayaranModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'siswa_id' => $this->faker->numberBetween(1, 3),
            'pembangunan' => $this->faker->numberBetween(100000, 1000000),
            'tunggakan' => $this->faker->numberBetween(100000, 1000000),
            'spp' => $this->faker->numberBetween(100000, 1000000),
            'lab' => $this->faker->numberBetween(100000, 1000000),
            'osis' => $this->faker->numberBetween(100000, 1000000),
            'psg' => $this->faker->numberBetween(100000, 1000000),
            'uas' => $this->faker->numberBetween(100000, 1000000),
            'keterangan' => $this->faker->numberBetween(100000, 1000000),
            'semester_ganjil' => $this->faker->numberBetween(100000, 1000000),
            'semester_genap' => $this->faker->numberBetween(100000, 1000000),
            'tanggal_bayar' => $this->faker->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}
