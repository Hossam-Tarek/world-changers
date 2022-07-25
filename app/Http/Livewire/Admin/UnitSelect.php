<?php

namespace App\Http\Livewire\Admin;

use App\Models\Subject;
use App\Models\Unit;
use App\Models\Year;
use Livewire\Component;

class UnitSelect extends Component
{
    public $years;
    public $yearId;
    public $subjects;
    public $subjectId;
    public $units;
    public $unitId;
    public $groupClass;

    public function mount($lesson = null, $groupClass = '')
    {
        $this->groupClass = $groupClass;
        $this->years = Year::all();
        $this->lesson = $lesson;
        $this->subjects = $this->units = collect();

        if ($lesson) {
            $this->subjects = Subject::where('year_id', $lesson->unit->subject->year_id)->get();
            $this->units = Unit::where('subject_id', $lesson->unit->subject_id)->get();
            $this->yearId = $lesson->unit->subject->year_id;
            $this->subjectId = $lesson->unit->subject_id;
            $this->unitId = $lesson->unit_id;
        }
    }

    public function updatedYearId($id)
    {
        $this->units = collect();
        $this->unitId = $this->subjectId = null;

        if (!is_numeric($id)) {
            $this->subjects = collect();
            return;
        }
        $this->subjects = Subject::where('year_id', $id)->get();
    }

    public function updatedSubjectId($id)
    {
        $this->unitId  = null;
        $this->units  = null;

        if (!is_numeric($id)) {
            $this->units = collect();
            return;
        }
        $this->units = Unit::where('subject_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.admin.unit-select');
    }
}
