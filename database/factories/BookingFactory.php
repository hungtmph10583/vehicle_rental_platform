<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\PricingRule;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookingFactory extends Factory
{
    public function definition()
    {
        $start  = $this->faker->dateTimeBetween('now', '+1 month');
        $car_id = Car::all()->random()->id;
        $pricing= PricingRule::find($car_id);
        if ($pricing) {
            // Random gói thuê cho khách hàng giả lập
            $columns = ['price_per_hour', 'price_per_day', 'price_per_week', 'price_per_month'];
            // 3. Chọn ngẫu nhiên 1 tên cột và lấy giá trị của nó
            $randomColumn = $columns[array_rand($columns)];
            $randomPrice = $pricing->$randomColumn;
        }

        // dump('car_id: '.$car_id);
        // dump('pricing: '.$pricing);
        // dump('randomColumn: '.$randomColumn);
        // dd('randomPrice: '.$randomPrice);


        return [
            'user_id'       => rand(2, 11),
            'car_id'        => $car_id,
            'start_time'    => $start,
            'end_time'      => Carbon::instance($start)->addHours(rand(2, 72)),
            'subtotal'      => $randomPrice,
            'status'        => $this->faker->randomElement([
                'pending', 'confirmed', 'cancelled', 'completed'
            ]),
            'payment_status'=> $this->faker->randomElement([
                'unpaid', 'paid', 'refunded'
            ]),
        ];
    }
}
