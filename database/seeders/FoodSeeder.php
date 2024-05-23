<?php

namespace Database\Seeders;
use App\Models\Foods;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foods::factory(10)->create();
    }
}
