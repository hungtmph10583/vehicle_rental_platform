<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingConflict extends Model
{
    use HasFactory;
    protected $fillable = ['car_id','start_time','end_time','reason'];

    public function car() { $this->belongsTo(Car::class); }
}
