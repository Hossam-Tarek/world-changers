<?php

namespace App\Imports;

use App\Models\Lesson;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class LessonsImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return Lesson::create($row);
    }

    public function rules(): array
    {
        return [
            'unit_id' => 'required|exists:units,id',
            'name_ar' => 'nullable|max:255',
            'name_en' => 'nullable|max:255',
            'name_fr' => 'nullable|max:255',
        ];
    }
}
