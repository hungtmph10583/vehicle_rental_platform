<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionUsage extends Model
{
    use HasFactory;
    protected $fillable = ['promotion_id','user_id','booking_id','used_at'];

    public function promotion() { $this->belongsTo(Promotion::class); }
    public function user() { $this->belongsTo(User::class); }
    public function booking() { $this->belongsTo(Booking::class); }
}
