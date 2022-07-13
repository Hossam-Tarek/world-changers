<?php

namespace App\Imports;

use App\Constants\Semester;
use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SubjectsImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $subject = Subject::create($row);
        $subject->departments()->sync(explode(',', $row['departments']));

        return $subject;
    }

    public function rules(): array
    {
        return [
            'year_id' => 'required|exists:years,id',
            'departments' => 'required',
            'departments.*' => 'required|exists:departments,id',
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
        ];
    }
}
