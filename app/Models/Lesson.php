<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'name_ar',
        'name_en',
        'name_fr',
    ];

    public function exams()
    {
        return $this->morphMany(Exam::class, 'examable');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function subject()
    {
        return $this->belongsTo()->belongsTo(Unit::class);
    }

    public function year()
    {
        return $this->belongsTo(Unit::class);
    }
}
