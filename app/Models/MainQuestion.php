<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'title',
        'body',
        'image',
    ];
}
