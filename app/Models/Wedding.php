<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'is_sent',
        'user_id',
        'description',
        'address',
        'comments'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower(trim($value)),
            get: fn($value) => ucfirst(trim($value)),
        );
    }
}
