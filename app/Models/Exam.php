<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function examable()
    {
        return $this->morphTo();
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function mainQuestions()
    {
        return $this->hasMany(MainQuestion::class);
    }
}
