<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        $brands = [
            'Toyota', 'Honda', 'Mercedes-Benz', 'BMW', 'Audi', 
            'Hyundai', 'Kia', 'VinFast', 'Ford', 'Mazda'
        ];

        $name = $this->faker->unique()->randomElement($brands);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'logo' => "https://placehold.co/200x200?text=" . $name, 
            'description' => "Hãng xe nổi tiếng " . $name . " với các dòng xe bền bỉ và hiện đại.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
