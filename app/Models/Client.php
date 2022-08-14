<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'rg',
        'phone',
        'email',
        'birthday'
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()->ucfirst()
        );
    }

    public function email(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()
        );
    }

    public function cpf(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()
        );
    }

    public function rg(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()
        );
    }

    public function birthdayFormatted(): Attribute
    {
        return Attribute::make(
            get: fn () => date('d/m/Y', strtotime($this->birthday))
        );
    }

    public function birthday(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()
        );
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', "%{$search}%");
    }

    public function adresses()
    {
        return $this->hasMany(Address::class);
    }
}
