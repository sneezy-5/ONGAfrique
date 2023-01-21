<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\UserRegisteredNotification;
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
            'name' => ['required', 'regex:/^[a-zA-Z\-.\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users','regex:/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
//dd($request->amount);
        $user = User::create([
            'name' => $request->name,
            'first_name'=>$request->name,
            'last_name'=>$request->name,
            'amount'=>$request->amount,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        
        $post=['title'=>'creation du compte donateur'];
        $user->notify(new UserRegisteredNotification($user, $post));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
