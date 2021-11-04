<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);

        $user->type()->create([
            'type' => 1,
            'gift_time' => now()->toDate(),
            'cost' => '10000'
        ]);

        $user->role()->create([
            'role' => 'user'
        ]);

        if($user != false)
        {
            event(new Registered($user));

            auth()->login($user, true);
            return redirect()->route('user.profile');
        }

        return redirect()->route('user.register')->withInput();
    }
}
