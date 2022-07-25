<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $teacher = auth('teacher')->user();

        return view('teacher.index', compact('teacher'));
    }
}
