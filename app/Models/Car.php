<?php

namespace App\Models;

// use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['brand_id','model','year','image_url','color','license_plate','seats','car_type_id','transmission','fuel_type','fuel_consumption','mileage','status','description'];

    const TRANSMISSION_AUTO     = 'auto';
    const TRANSMISSION_MANUAL   = 'manual';

    // Quy ước các loại nhiên liệu
    const FUEL_GASOLINE = 'gasoline';
    const FUEL_DIESEL = 'diesel';
    const FUEL_ELECTRIC = 'electric';

    const STATUS_AVAILABLE  = 'available';
    const STATUS_BOOKED     = 'booked';
    const STATUS_MAINTENANCE= 'maintenance';

    // --- RELATIONSHIP ---
    public function brand() { return $this->belongsTo(Brand::class); }
    public function pricing() { return $this->hasOne(PricingRule::class); }
    public function bookings() { return $this->hasMany(Booking::class); }
    public function booking_conflict() { return $this->hasOne(BookingConflict::class); }
    public function reviews() { return $this->hasMany(Review::class); }
    public function car_type() { return $this->belongsTo(CarType::class); }
    public function car_images() { return $this->hasMany(CarImage::class); }
    // --------------------
    public function averageRating() { return $this->reviews()->avg('rating'); }

    // --- Scope Search ---
    public function scopeSearch($query, $params)
    {
        return $query
            ->when($params['brand_id'] ?? null, function ($q, $brandId) {
                $q->where('brand_id', $brandId);
            })
            ->when($params['keyword'] ?? null, function ($q, $keyword) {
                $q->whereHas('brand', function ($sub) use ($keyword) {
                    $sub->where('name', 'like', "%{$keyword}%");
                });
            })
            ->when($params['seats'] ?? null, fn($q, $seats) => $q->where('seats', $seats))
            ->where('status', 'available');
    }

    // --- ACCESSORS (Thuộc tính ảo) ---

    /**
     * Lấy điểm đánh giá trung bình (chỉ tính các review đã duyệt).
     * Cách dùng: $car->average_rating
     */

    public function getAverageRatingAttribute()
    {
        // Nhờ Global Scope ở model Review, avg() sẽ tự lọc status='approved'
        return (float) $this->reviews()->avg('rating') ?: 0.0;
    }

    /**
     * Kiểm tra nhanh xe có đang trống không.
     */
    public function getIsAvailableAttribute(): bool
    {
        return $this->status === 'available';
    }

    // public function fuel_consumption_display() {
    //     return Attribute::make(
    //         get: function () {
    //             if (!$this->fuel_consumption) return 'N/A';

    //             // Quy ước: Nếu là xe điện thì dùng kWh, ngược lại dùng Lít
    //             $unit = ($this->fuel_type === self::FUEL_ELECTRIC) ? 'kWh/100km' : 'L/100km';
                
    //             return $this->fuel_consumption . ' ' . $unit;
    //         },
    //     );
    // }
}
