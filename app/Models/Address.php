<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'street',
        'district',
        'number',
        'city',
        'state',
        'zip_code'
    ];

    public function street(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()->ucfirst()
        );
    }

    public function district(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()->ucfirst()
        );
    }

    public function number(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()
        );
    }

    public function city(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()->ucfirst()
        );
    }

    public function state(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()->ucfirst()
        );
    }

    public function zip_code(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->trim()
        );
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
