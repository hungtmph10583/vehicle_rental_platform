<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\CarType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Lấy ngẫu nhiên một Brand đã tồn tại trong DB
            'brand_id' => Brand::inRandomOrder()->first()->id ?? Brand::factory(),
            'car_type_id' => CarType::inRandomOrder()->first()->id ?? CarTypeFactory::new(),
            
            'model' => $this->faker->words(2, true), // Ví dụ: "Camry", "Civic Type R"
            'year' => $this->faker->year(),
            'color' => $this->faker->randomElement([
                'Trắng (White)', 'Đen (Black)', 'Xám (Grey)', 
                'Đỏ (Red)', 'Xanh Dương (Blue)', 'Bạc (Silver)', 'Vàng (Gold)'
            ]),
            'license_plate' => strtoupper($this->faker->bothify('##?-####')), // Ví dụ: 51F-1234
            
            'seats' => $this->faker->randomElement([4, 5, 7]),
            'transmission' => $this->faker->randomElement(['auto', 'manual']),
            'fuel_type' => $this->faker->randomElement(['gasoline', 'diesel', 'electric']),
            
            'mileage' => $this->faker->numberBetween(0, 100000),
            
            'status' => 'available', // Mặc định xe mới tạo là có sẵn
            'image_url' => 'https://placehold.co/600x400?text=Car+Image',
            'description' => $this->faker->paragraph(),
            
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
