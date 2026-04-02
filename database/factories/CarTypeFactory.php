<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = [
            'Sedan' => 'Xe 4 chỗ gầm thấp, sang trọng và êm ái.',
            'SUV' => 'Xe gầm cao, mạnh mẽ, phù hợp địa hình và gia đình.',
            'Hatchback' => 'Xe nhỏ gọn, linh hoạt trong đô thị.',
            'MPV' => 'Xe đa dụng 7 chỗ, không gian rộng rãi.',
            'Pickup' => 'Xe bán tải, động cơ mạnh, chở đồ tiện lợi.',
            'Luxury' => 'Dòng xe hạng sang, tiện nghi cao cấp.'
        ];

        $name = $this->faker->unique()->randomElement(array_keys($types));

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $types[$name],
        ];
    }
}
