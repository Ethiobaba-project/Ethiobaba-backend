<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{


    use HasFactory;

    protected $fillable = ['title', 'price', 'squer_feet', 'no_of_bedrooms', 'no_of_bathrooms', 'description'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('price', 'like', '%' . request('search') . '%')
                ->orWhere('squer_feet', 'like', '%' . request('search') . '%');
        }
    }

}
