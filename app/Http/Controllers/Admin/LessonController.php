<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LessonRequest;
use App\Imports\LessonsImport;
use App\Models\Lesson;
use App\Models\Subject;
use App\Traits\ImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class LessonController extends Controller
{
    use ImportTrait;

    private $importClass = LessonsImport::class;

    public function index()
    {
        return view('admin.lessons.index');
    }

    public function create()
    {
        return view('admin.lessons.create');
    }

    public function store(LessonRequest $request)
    {
        Lesson::create($request->validated());
        toast(trans('admin.new_lesson_added'),'success');

        return redirect()->route('admin.lessons.index');
    }

    public function edit(Lesson $lesson)
    {
        return view('admin.lessons.edit', compact('lesson'));
    }

    public function update(LessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->validated());
        toast(trans('admin.lesson_updated'),'success');

        return redirect()->route('admin.lessons.index');
    }

    public function downloadTemplate()
    {
        $headingRow = [
            'unit_id',
            'name_ar',
            'name_en',
            'name_fr',
        ];

        return (new Collection([$headingRow]))->downloadExcel('lessons.xlsx');
    }
}
