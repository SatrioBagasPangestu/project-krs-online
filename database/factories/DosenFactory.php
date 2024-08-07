<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_dosen' => $this->faker->name(),
            // 'nip' => mt_rand(1, 10),
            // 'id_user' => mt_rand(1, 10)
        ];
    }
}
