<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'phones' => 'required',
            'phones.*' => 'required',
            'city_id' => 'required|exists:cities,id',
            'years' => 'required',
            'years.*' => 'required',
            'sites' => 'nullable',
            'sites.*' => 'nullable|string|max:255',
            'subjects' => 'required',
            'subjects.*' => 'required',
            'teaching_language_id' => 'required|exists:languages,id',
            'school' => 'nullable|string|max:255',
            'brief' => 'nullable|string',
            'youtube' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:4096',
            'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:4096',
        ];
    }
}
