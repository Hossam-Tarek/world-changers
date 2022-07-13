<?php

namespace App\Http\Controllers\Teacher\Auth;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Phone;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Year;
use App\Providers\RouteServiceProvider;
use App\Traits\FileTrait;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    use FileTrait;

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('teacher.auth.register', [
            'languages' => Language::all(),
            'subjects' => Subject::query()->with('year')->get(),
            'years' => Year::all(),
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teachers'],
            'phones' => 'required',
            'phones.*' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'city_id' => 'required|exists:cities,id',
            'years' => 'required',
            'years.*' => 'required',
            'sites' => 'nullable',
            'sites.*' => 'nullable',
            'subjects' => 'required',
            'subjects.*' => 'required',
            'teaching_language_id' => 'required|exists:languages,id',
            'school' => 'required|string|max:255',
            'brief' => 'nullable|string',
            'youtube' => 'nullable|string',
            'images.*' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'avatar' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $data['password'] = Hash::make($request->password);
        $data['image'] = self::uploadFile($request->file('avatar'), 'teachers/');
        $teacher = Teacher::create($data);
        foreach ($request->phones as $value) {
            $phone = new Phone();
            $phone->number = $value;
            $teacher->phones()->save($phone);
       }
       $teacher->subjects()->sync($request->subjects);
       $teacher->years()->sync($request->years);
       foreach($request->sites as $site){
           $teacher->sites()->create(['site' => $site]);
       }

        if ($request->hasFile('images')) {
            self::uploadFiles($request->images, $teacher, 'teachers/');
        }

        event(new Registered($teacher));

        Auth::guard('teacher')->login($teacher);

        return redirect(RouteServiceProvider::TEACHER);
    }
}
