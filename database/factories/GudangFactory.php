<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Gudang;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class gudangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gudang' => $this->faker->word,
            'jenis_gudang' => $this->faker->word,
            'luas' => $this->faker->numberBetween(100, 1000),
            'volume' => $this->faker->numberBetween(1, 100),
            'keterangan' => $this->faker->sentence,
        ];
    }
}
