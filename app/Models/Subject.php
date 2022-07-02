<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'department_id',
        'name',
        'semester',
    ];

    public function exams()
    {
        return $this->morphMany(Exam::class, 'examable');
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
