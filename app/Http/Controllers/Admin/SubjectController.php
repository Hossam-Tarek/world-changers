<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubjectRequest;
use App\Imports\SubjectsImport;
use App\Models\Subject;
use App\Traits\ImportTrait;
use Illuminate\Support\Collection;

class SubjectController extends Controller
{
    use ImportTrait;

    private $importClass = SubjectsImport::class;

    public function index()
    {
        return view('admin.subjects.index');
    }

    public function create()
    {
        return view('admin.subjects.create');
    }

    public function store(SubjectRequest $request)
    {
        $data = $request->validated();
        $subject = Subject::create($data);
        $subject->departments()->sync($data['departments']);

        toast(trans('admin.new_subject_added'),'success');

        return redirect()->route('admin.subjects.index');
    }

    public function edit(Subject $subject)
    {
        return view('admin.subjects.edit', compact('subject'));
    }

    public function update(SubjectRequest $request, Subject $subject)
    {
        $data = $request->validated();
        $data['semester'] ??= null;
        $data['department_id'] ??= null;
        $subject->update($data);
        $subject->departments()->sync($data['departments']);
        toast(trans('admin.new_subject_updated'),'success');

        return redirect()->route('admin.subjects.index');
    }

    public function downloadTemplate()
    {
        $headingRow = [
            'year_id',
            'name_ar',
            'name_en',
            'name_fr',
            'departments',
        ];

        return (new Collection([$headingRow]))->downloadExcel('subjects.xlsx');
    }
}
