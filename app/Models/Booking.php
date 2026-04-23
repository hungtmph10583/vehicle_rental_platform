<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['booking_code','user_id','car_id','start_time','end_time','total_price','status','payment_status'];

    public function user() { return $this->belongsTo(User::class); }
    public function car() { return $this->belongsTo(Car::class); }
    public function promotion() { return $this->belongsTo(Promotion::class); }
    public function payment() { return $this->hasOne(Payment::class); }
    public function review() { return $this->hasOne(Review::class); }

    protected static function booted()
    {
        static::creating(function ($booking) {
            // Tu dong tao ma booking_code
            $booking->booking_code = self::generateUniqueCode();
        });

        static::creating(function ($booking) {
            // Tự động tính total_price trước khi lưu
            $booking->total_price = $booking->subtotal - $booking->discount_amount;
        });
    }

    public function generateUniqueCode()
    {
        $characters = '23456789ABCDEFGHJKLMNPQRSTWXYZ';
        do {
            $code = substr(str_shuffle(str_repeat($characters, 6)), 0, 6);
        } while (self::where('booking_code', $code)->exists());

        return $code;
    }

    public function scopeFilter($query, $filters)
    {
        return $query
            ->when($filters['status'] ?? null, function ($q, $status) {
                $q->where('status', $status);
            })
            ->when($filters['payment_status'] ?? null, fn ($q, $pStatus) => $q->whenre('payment_status', $pStatus))
            ->when($filters['date_from'] ?? null, fn ($q, $from) => $q->where('created_at', $from))
            ->when($filters['date_to'] ?? null, fn ($q, $to) => $q->where('created_at', '<=' ,$to));
    }
}
