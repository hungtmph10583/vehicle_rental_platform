<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id','car_id','booking_id','rating','comment','status'];

    public function user() { $this->belongsTo(User::class); }
    public function car() { $this->belongsTo(Car::class); }
    public function booking() { $this->belongsTo(Booking::class); }

    // Hiển thị những review đã được duyệt cho kahcsh hàng
    protected static function booted()
    {
        static::addGlobalScope('approved', function ($builder) {
            $builder->where('status', 'approved');
        });
    }

    public function scopeFilter($query, $params)
    {
        return $query
            ->when($params['status'] ?? null, fn($q, $status) => $q->where('status', $status))
            ->when($params['rating'] ?? null, fn($q, $rating) => $q->where('rating', $rating));
    }

    // --- Dinh dang du lieu hie thi ---
    public function getStatusLabelAttribute(): string
    {
        $statuses = [
            'pending'  => 'Chờ duyệt',
            'approved' => 'Đã hiển thị',
            'hidden'   => 'Đang ẩn',
            'spam'     => 'Tin rác',
        ];

        // Trả về giá trị trong mảng, nếu không thấy thì trả về 'Không xác định'
        return $statuses[$this->status] ?? 'Không xác định';
    }
}