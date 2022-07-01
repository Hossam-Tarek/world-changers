<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'body',
        'image',
    ];

    public function getImageUrlAttribute()
    {
        return $this->attributes['image'] ? asset($this->attributes['image']) : '';
    }
}
