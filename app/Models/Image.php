<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path', 'gallery_type', 'gallery_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
    public function galleryTypes()
    {
        return $this->belongsTo(Gallery::class, 'gallery_type');
    }
}
