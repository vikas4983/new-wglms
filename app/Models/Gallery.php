<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['user_id', 'name', 'status'];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value)
        );
    }
    protected function status(): Attribute
    {
        return Attribute::make(get: fn($value) => ucfirst($value) == 1 ? 'Active' : 'Inactive');
    }
}
