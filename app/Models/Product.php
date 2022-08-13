<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'image',
        'price',
        'is_active',
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()->ucfirst()
        );
    }

    public function price(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
