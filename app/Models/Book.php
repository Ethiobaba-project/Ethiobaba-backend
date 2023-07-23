<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'price',
        'title',
        'author',
        'description',
        'language',
        'paper_back',
        'image'
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? null) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('author', 'like', '%' . $filters['search'] . '%');
        }
    }
}
