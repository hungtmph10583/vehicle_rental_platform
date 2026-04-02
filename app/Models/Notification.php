<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    const TYPE_BOOKING  = 'booking_status';
    const TYPE_PAYMENT  = 'payment';
    const TYPE_PROMO    = 'promotion';
    const TYPE_SYSTEM   = 'system';

    // Khi tạo thông báo trong Controller, thì dùng:
    // 'type' => Notification::TYPE_BOOKING

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }


}
