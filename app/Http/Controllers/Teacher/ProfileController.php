<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\ChangePasswordRequest;
use App\Http\Requests\Teacher\UpdateProfileRequest;
use App\Models\Language;
use App\Models\Phone;
use App\Models\Subject;
use App\Models\Year;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use FileTrait;

    public function show()
    {
        dd('Put show profile page here');
    }

    public function edit()
    {
        return view('teacher.profile.edit', [
            'teacher' => auth('teacher')->user()->load(['sites', 'images', 'phones', 'years', 'subjects', 'city']),
            'languages' => Language::all(),
            'years' => Year::all(),
            'subjects' => Subject::all(),
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $teacher = auth('teacher')->user();
        $data = $request->validated();

        if ($request->has('image')) {
            self::deleteFile($teacher->image);
            $data['image'] = self::uploadFile($data['image'], 'teachers/');
        }
        if ($request->has('images')) {
            self::deleteFiles($teacher->images());
            self::uploadFiles($request->images, $teacher, 'teachers/');
        }

        $teacher->phones()->delete();
        foreach ($request->phones as $value) {
            $phone = new Phone();
            $phone->number = $value;
            $teacher->phones()->save($phone);
        }

        $teacher->sites()->delete();
        foreach($request->sites as $site){
            $teacher->sites()->create(['site' => $site]);
        }

        $teacher->update($data);
        $teacher->subjects()->sync($request->subjects);
        $teacher->years()->sync($request->years);

        toast(trans('teacher.profile_updated'),'success');

        return back();
    }

    public function changePasswordView()
    {
        return view('teacher.change-password');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        auth('teacher')->user()->update(['password' => Hash::make($request->new_password)]);
        toast(trans('teacher.password_changed'),'success');

        return back();
    }
}
