<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'name',
        'image',
        'price',
        'is_active',
    ];

    public function product()
    {
        return $this->belongsTo(Category::class);
    }
}
