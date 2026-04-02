<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PricingRuleFactory extends Factory
{
    
    // Biến static để lưu trữ danh sách ID chưa sử dụng
    protected static array $carIds = [];

    public function definition()
    {
        // Nếu danh sách trống, khởi tạo mảng từ 1 đến 40 và xáo trộn
        if (empty(self::$carIds)) {
            self::$carIds = range(1, 40);
            shuffle(self::$carIds);
        }

        // Lấy (và xóa) một ID ra khỏi mảng
        $carId = array_shift(self::$carIds);

        // Giả lập giá cơ bản để tính toán các mốc khác cho logic
        $basePrice = $this->faker->randomElement([500000, 800000, 1200000, 2000000]);

        return [
            'car_id' => $carId,
            'price_per_hour' => $basePrice * 0.3,
            'price_per_day' => $basePrice,
            'price_per_week' => $basePrice * 7 * 0.9,  // Giảm 10%
            'price_per_month' => $basePrice * 30 * 0.8, // Giảm 20%
            'weekend_multiplier' => 1.2,
            'holiday_multiplier' => 1.5,
            'created_at' => now(),
        ];
    }
}
