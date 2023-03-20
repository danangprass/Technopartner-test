<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cost>
 */
class CostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => collect(['penjualan', 'pembelian'])->random(),
            'date' => $this->faker->date('Y-m-d'),
            'qty' => $this->faker->numberBetween(10,50),
            'cost' => $this->faker->numberBetween(100,500),
            'price' => $this->faker->numberBetween(100,500),
            // 'total_cost' => $this->faker->numberBetween(100,500),
            // 'qty_balance' => $this->faker->numberBetween(10,50),
            // 'value_balance' => $this->faker->numberBetween(100,500),
            // 'hpp' => $this->faker->numberBetween(100,500),
        ];
    }
}
