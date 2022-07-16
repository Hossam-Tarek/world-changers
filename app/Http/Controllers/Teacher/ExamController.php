<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Language;
use App\Models\Subject;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create()
    {
        return view('teacher.exams.create', [
            'languages' => Language::all(),
            'subjects' => Subject::all(),
        ]);
    }
}
