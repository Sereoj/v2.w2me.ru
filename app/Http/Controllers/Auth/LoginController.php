<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function credentials(UserStoreRequest $request)
    {
        return $request->only('email', 'password');
    }
    public function store(UserStoreRequest $request)
    {
        if (auth()->attempt($this->credentials($request), $request->filled('rememberUser'))) {
            $request->session()->regenerate();
            return redirect()->route('index');
        }
        return redirect()->route('user.login')->withInput();
    }
}
