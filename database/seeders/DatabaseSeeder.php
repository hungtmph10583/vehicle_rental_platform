<?php

namespace Database\Seeders;


use App\Models\Car;
use App\Models\PricingRule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Brand::factory(10)->create();
        \App\Models\CarType::factory(6)->create();
        Car::factory(48)->create();
        PricingRule::factory(48)->create();
    }
}
