<?php

namespace App\Http\Livewire\Teacher;

use App\Models\Language;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Unit;
use Livewire\Component;

class MakeExamSelect extends Component
{
    public $class;
    public $languages;
    public $subjects;
    public $units;
    public $lessons;
    public $languageId;
    public $subjectId;
    public $unitId;
    public $lessonId;
    public $languageCode;

    public function mount($class = '', $languages = null, $subjects = null)
    {
        $this->class = $class;
        $this->languages = $languages ?? Language::all();
        $this->languageId = $this->languages->first()->id;
        $this->languageCode = $this->languages->first()->code;
        $this->subjects = $subjects ?? Subject::all();
        $this->units = collect();
        $this->lessons = collect();
    }

    public function updatedLanguageId($id)
    {
        $language = $this->languages->find($id);
        $this->languageCode = $language->code ?? 'ar';
    }

    public function updatedSubjectId($id)
    {
        $this->units = Unit::where('subject_id', $id)->get() ?? collect();
        $this->lessons = collect();
        $this->unitId = "";
    }

    public function updatedUnitId($id)
    {
        $this->lessons = Lesson::where('unit_id', $id)->get() ?? collect();
    }

    public function render()
    {
        return view('livewire.teacher.make-exam-select');
    }
}
