<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationCard extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'description'];
}
