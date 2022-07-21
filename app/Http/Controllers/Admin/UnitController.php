<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UnitRequest;
use App\Imports\UnitsImport;
use App\Models\Subject;
use App\Models\Unit;
use App\Traits\ImportTrait;
use Illuminate\Support\Collection;

class UnitController extends Controller
{
    use ImportTrait;

    private $importClass = UnitsImport::class;

    public function index()
    {
        return view('admin.units.index');
    }

    public function create()
    {
        return view('admin.units.create', [
            'subjects' => Subject::with('year')->get(),
        ]);
    }

    public function store(UnitRequest $request)
    {
        $data = $request->validated();
        Unit::create($data);
        toast(trans('admin.new_unit_added'),'success');

        return redirect()->route('admin.units.index');
    }

    public function edit(Unit $unit)
    {
        return view('admin.units.edit', [
            'unit' => $unit,
            'subjects' => Subject::with('year')->get(),
        ]);
    }

    public function update(UnitRequest $request, Unit $unit)
    {
        $unit->update($request->validated());
        toast(trans('admin.unit_updated'),'success');

        return redirect()->route('admin.units.index');
    }

    public function downloadTemplate()
    {
        $headingRow = [
            'subject_id',
            'name_ar',
            'name_en',
            'name_fr',
        ];

        return (new Collection([$headingRow]))->downloadExcel('units.xlsx');
    }
}
