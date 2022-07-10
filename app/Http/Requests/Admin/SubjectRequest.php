<?php

namespace App\Http\Requests\Admin;

use App\Constants\Semester;
use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'year_id' => 'required|exists:years,id',
            'department_id' => 'required|exists:departments,id',
            'name' => 'required|string|max:255',
            'semester' => 'required|in:' . implode(',',array_keys(Semester::getList())),
        ];
    }
}
