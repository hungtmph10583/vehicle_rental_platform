<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = ['code','discount_type','discount_value','max_discount','start_date','end_date','usage_limit'];

    public function usages() { return $this->hasMany(PromotionUsage::class); }
    public function bookings() { return $this->hasMany(Booking::class); }


}
