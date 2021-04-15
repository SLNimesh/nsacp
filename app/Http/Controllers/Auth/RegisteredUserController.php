<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required|string|max:255',
            'username' => 'required|string|max:128|unique:users',
            'nic' => 'required|string|max:255',
            'contactNumber' => 'required|digits:10',
            'dateOfBirth' => 'required|date',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'type' => 'USER',
            'name' => $request->name,
            'address' => $request->address,
            'username' => $request->username,
            'nic' => $request->nic,
            'contactNumber' => $request->contactNumber,
            'dateOfBirth' => $request->dateOfBirth,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
