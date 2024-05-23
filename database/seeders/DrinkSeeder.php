<?php

namespace Database\Seeders;
use App\Models\Drinks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Drinks::factory(10)->create();
    }
}
