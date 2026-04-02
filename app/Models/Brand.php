<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','logo','description'];
    public function cars() { return $this->hasMany(Car::class); }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('name','like',"%{$keyword}%")->orWhere('slug','like',"%{$keyword}%");
    }
}
