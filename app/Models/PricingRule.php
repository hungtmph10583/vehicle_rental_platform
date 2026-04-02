<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingRule extends Model
{
    use HasFactory;
    protected $fillable = ['car_id','price_per_hour','price_per_day','price_per_week','price_per_month','weekend_multiplier','weekend_multiplier'];

    public function car() { return $this->belongsTo(Car::class); }
}
