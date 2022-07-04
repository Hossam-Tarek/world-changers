<?php

namespace App\Http\Livewire\Admin;

use App\Models\Department;
use App\Models\Year;
use Livewire\Component;

class DepartmentSelect extends Component
{
    public $years;
    public $yearId;
    public $departmentId;
    public $departments;
    public $subject;

    public function mount($subject = null)
    {
        $this->years = Year::all();
        $this->subject = $subject;
        if ($subject) {
            $this->departments = Department::where('year_id', $subject->year_id)->get();
            $this->yearId = $subject->year_id;
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

    public function render()
    {
        return view('livewire.admin.department-select');
    }
}
