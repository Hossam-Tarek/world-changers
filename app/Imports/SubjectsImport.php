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
        return new Subject($row);
    }

    public function rules(): array
    {
        return [
            'year_id' => 'required|exists:years,id',
            'department_id' => 'required|exists:departments,id',
            'name' => 'required|string|max:255',
            'semester' => 'required|in:' . implode(',',array_keys(Semester::getList())),
        ];
    }
}
