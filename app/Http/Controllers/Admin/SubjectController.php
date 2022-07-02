<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubjectRequest;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Year;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
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
        $data['semester'] ??= null;
        $data['department_id'] ??= null;
        Subject::create($data);
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
        toast(trans('admin.new_subject_updated'),'success');

        return redirect()->route('admin.subjects.index');
    }
}
