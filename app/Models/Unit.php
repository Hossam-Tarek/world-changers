<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'name_ar',
        'name_en',
        'name_fr',
    ];

    public function exams()
    {
        return $this->morphMany(Exam::class, 'examable');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

//    public function year()
//    {
//        dd('sfsd');
//        return $this->hasOneDeep(Year::class, Subject::class);
//    }
}
