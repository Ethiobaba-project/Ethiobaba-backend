<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'manufacturer',
        'model',
        'year',
        'mileage',
        'price',
        'color',
        'body_type',
        'fuel_type',
        'transmission',
        'description',
        'user_id',
    ];
    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('price', 'like', '%' . request('search') . '%')
                ->orWhere('squer_feet', 'like', '%' . request('search') . '%');
        }
    }

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    use HasFactory;
}
