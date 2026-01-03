<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $fillable = ['name', 'email', 'phone','is_sent'];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower(trim($value)),
            get: fn($value) => ucfirst(trim($value)),
        );
    }
}
