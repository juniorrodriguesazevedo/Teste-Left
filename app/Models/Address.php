<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
