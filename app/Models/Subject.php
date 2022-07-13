<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'name_ar',
        'name_en',
        'name_fr',
    ];

    public function exams()
    {
        return $this->morphMany(Exam::class, 'examable');
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
