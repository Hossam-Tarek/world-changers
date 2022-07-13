<?php

namespace App\Http\Livewire\Admin;

use App\Models\Department;
use App\Models\Year;
use Livewire\Component;

class YearDepartmentsMultiSelect extends Component
{
    public $years;
    public $yearId;
    public $departmentIds;
    public $departments;
    public $subjectDepartments;
    public $subject;
    public $groupClass;

    public function mount($subject = null, $groupClass = '')
    {
        $this->groupClass = $groupClass;
        $this->years = Year::all();
        $this->subject = $subject;
        if ($subject) {
            $this->departments = Department::where('year_id', $subject->year_id)->get();
            $this->yearId = $subject->year_id;
            $this->subjectDepartments = $this->subject->departments()->pluck('departments.id')->toArray();
        } else {
            $this->departments = collect();
        }
        $this->departmentId = $subject->department_id ?? null;
    }

    public function updatedYearId($id)
    {
        if (!is_numeric($id)) {
            $this->departments = collect();
        }
        $this->departments = Department::where('year_id', $id)->get();
        if ($this->departments == null) {
            $this->departments = collect();
        }
    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('intializeSelect2');
    }

    public function render()
    {
        return view('livewire.admin.year-departments-multi-select');
    }
}
