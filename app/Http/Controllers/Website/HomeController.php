<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeacherResource;
use App\Models\Contact;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Traits\FileTrait;

class HomeController extends Controller
{
    use FileTrait;

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'phone' => 'required',
            'message' => 'nullable|string',
            // 'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        // $data['image'] = self::uploadFile($request->image, 'contact/');
        Contact::create($data);
        return view('website.index');
    }
    public function teachers()
    {
        $teachers = Teacher::all();
        return view('website.teachers', [
            'teachers' => TeacherResource::collection($teachers),
        ]);
    }
}
