<?php

namespace Database\Seeders;

use App\Models\Cost;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cost::factory(15)->create();
        Cost::insert([[
            'description' => 'pembelian',
            'date' => new Carbon('2021-01-01'),
            'created_at' => new Carbon('2021-01-01'),
            'updated_at' => new Carbon('2021-01-01'),
            'qty' => 40,
            'price' => 100,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-01'),
            'created_at' => new Carbon('2021-01-01'),
            'updated_at' => new Carbon('2021-01-01'),
            'qty' => -20,
            'price' => 200,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-02'),
            'created_at' => new Carbon('2021-01-02'),
            'updated_at' => new Carbon('2021-01-02'),
            'qty' => -10,
            'price' => 200,
        ],

        [
            'description' => 'pembelian',
            'date' => new Carbon('2021-01-03'),
            'created_at' => new Carbon('2021-01-03'),
            'updated_at' => new Carbon('2021-01-03'),
            'qty' => 20,
            'price' => 120,
        ],

        [
            'description' => 'pembelian',
            'date' => new Carbon('2021-01-03'),
            'created_at' => new Carbon('2021-01-03'),
            'updated_at' => new Carbon('2021-01-03'),
            'qty' => 10,
            'price' => 110,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-04'),
            'created_at' => new Carbon('2021-01-04'),
            'updated_at' => new Carbon('2021-01-04'),
            'qty' => -5,
            'price' => 200,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-05'),
            'created_at' => new Carbon('2021-01-05'),
            'updated_at' => new Carbon('2021-01-05'),
            'qty' => -8,
            'price' => 200,
        ],

        [
            'description' => 'pembelian',
            'date' => new Carbon('2021-01-06'),
            'created_at' => new Carbon('2021-01-06'),
            'updated_at' => new Carbon('2021-01-06'),
            'qty' => 15,
            'price' => 115,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-07'),
            'created_at' => new Carbon('2021-01-07'),
            'updated_at' => new Carbon('2021-01-07'),
            'qty' => -20,
            'price' => 200,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-07'),
            'created_at' => new Carbon('2021-01-07'),
            'updated_at' => new Carbon('2021-01-07'),
            'qty' => -15,
            'price' => 200,
        ],

        [
            'description' => 'pembelian',
            'date' => new Carbon('2021-01-08'),
            'created_at' => new Carbon('2021-01-08'),
            'updated_at' => new Carbon('2021-01-08'),
            'qty' => 10,
            'price' => 110,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-09'),
            'created_at' => new Carbon('2021-01-09'),
            'updated_at' => new Carbon('2021-01-09'),
            'qty' => -5,
            'price' => 210,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-10'),
            'created_at' => new Carbon('2021-01-10'),
            'updated_at' => new Carbon('2021-01-10'),
            'qty' => -6,
            'price' => 210,
        ],

        [
            'description' => 'pembelian',
            'date' => new Carbon('2021-01-11'),
            'created_at' => new Carbon('2021-01-11'),
            'updated_at' => new Carbon('2021-01-11'),
            'qty' => 4,
            'price' => 125,
        ],

        [
            'description' => 'penjualan',
            'date' => new Carbon('2021-01-12'),
            'created_at' => new Carbon('2021-01-12'),
            'updated_at' => new Carbon('2021-01-12'),
            'qty' => -5,
            'price' => 210,
        ]]);
    }
}
