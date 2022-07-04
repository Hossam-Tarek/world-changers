<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register', [
            'languages' => Language::all(),
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'city_id' => 'required|exists:cities,id',
            'phones' => 'required',
            'phones.*' => 'required',
            'parent_phone' => 'nullable',
            'study_language_id' => 'required|exists:languages,id',
            'second_language_id' => 'required|exists:languages,id',
            'year_id' => 'required|exists:years,id',
            'department_id' => 'required|exists:departments,id',
            'school' => 'required|string|max:255',
            'targeted_percentage' => 'required|numeric',
            'targeted_collage' => 'required|string|max:255',
        ]);

        $data['password'] = Hash::make($request->password);
        // TODO: Create many phones for the user
        dd($data['phones']);
        $user = User::create($data);
        $user->phones()->save($data['phones']);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
