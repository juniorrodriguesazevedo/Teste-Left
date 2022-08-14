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
            set: fn ($value) => Str::of($value)->trim()->replace(',', '', $value)
        );
    }

    public function priceFormatted(): Attribute
    {
        return Attribute::make(
            get: fn () => number_format($this->price, 2, ',', '.')
        );
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', "%{$search}%");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
