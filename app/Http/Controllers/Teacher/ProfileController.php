<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\ChangePasswordRequest;
use App\Http\Requests\Teacher\UpdateProfileRequest;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use FileTrait;

    public function edit()
    {
        return view('teacher.profile', [
            'teacher' => auth('teacher')->user(),
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

        $teacher->update($data);
        toast(trans('admin.profile').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return back();
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        auth('teacher')->user()->update(['password' => Hash::make($request->new_password)]);
        toast(trans('admin.password').' '.trans('admin.changed').' '.trans('admin.successfully'),'success');

        return back();
    }
}
