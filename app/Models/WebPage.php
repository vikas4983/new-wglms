<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebPage extends Model
{
    protected $fillable = ['user_id', 'name', 'icon', 'title', 'primary_person', 'primary_contact', 'secondary_person', 'secondary_contact', 'email', 'copyright', 'map', 'address','status'];
}
