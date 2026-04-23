<?php

namespace Database\Factories;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{   
    public function definition()
    {
        $boking = Booking::inRandomOrder()->first();

        $arr_method = ['cash', 'vnpay', 'momo']; 
        $method     = $arr_method[array_rand($arr_method)];
        $transaction_code = null;
        $paid_at = null;

        if ($method == 'vnpay' || $method == 'momo' ) {
            $characters = '23456789ABCDEFGHJKLMNPQRSTWXYZ';
            $transaction_code = substr(str_shuffle(str_repeat($characters, 6)), 0, 6);
            $paid_at = Carbon::now()->addMinutes(rand(2, 8));
        }

        $arr_status = ['pending', 'success', 'failed']; 
        $status     = $arr_status[array_rand($arr_status)];

        // dump('booking_id: '.$boking->id);
        // dump('amount: '.$boking->total_price);
        // dump('method: '.$method);
        // dump('status: '.$status);
        // dump('transaction_code: '.$transaction_code);
        // dd('paid_at: '.$paid_at);

        return [
            'booking_id'    => $boking->id,
            'amount'        => $boking->total_price,
            'method'        => $method,
            'status'        => $status,
            'transaction_code'=> $transaction_code,
            'paid_at'       => $paid_at,
        ];
    }
}
