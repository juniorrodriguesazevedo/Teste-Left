<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()->ucfirst()
        );
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
