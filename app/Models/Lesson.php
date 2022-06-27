<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'name',
        'order',
    ];

    public function exams()
    {
        return $this->morphMany(Exam::class, 'examable');
    }
}
