<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ---- RELATIONSHIP -----
    public function bookings() { return $this->hasMany(Booking::class)->latest(); }
    // ** payment - quan he gian tiep thong qua booking
    public function payments() { return $this->hasManyThrough(Payment::class, Booking::class); }
    public function reviews() { return $this->hasMany(Review::class); }
    public function promotionUsages() { return $this->hasMany(PromotionUsage::class); }

    // public function notifications() {
    //     return $this->hasMany(Notification::class)->latest();
    // }

    // ---- RELATIONSHIP -----

    public function scopeSearch($query, $keyword)
    {
        return $query->when($keyword, function ($q) use ($keyword) {
            $q->where(function ($sub) use ($keyword) {
                $sub->where('name', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%")
                    ->orWhere('phone', 'like', "%{$keyword}%");
            });
        });
    }
}
