<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileEditRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function index()
    {
        return 'Auth';
    }

    public function index_login()
    {
        return view('layouts.login', ['meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function index_register()
    {
        return view('layouts.register',[
            'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10',
            'meta_description' => '',
            ]
        );
    }

    public function create(UserCreateRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);
        $user->role()->create([
            'role' => 'user'
        ]);

        $user->type()->create([
            'type' => 'free',
            'gift_time' => null,
            'cost' => '2000'
        ]);

        if($user != null || $user != false)
        {
            auth()->login($user, true);
            return redirect()->route('user.profile');
        }

        return redirect()->route('user.register')->withInput();
    }

    public function store(UserStoreRequest $request)
    {
        if (auth()->attempt($request->only('email', 'password'), $request->rememberUser == "true")) {
            return redirect()->route('index');
        }
        return redirect()->route('user.login')->withInput();
    }

    public function index_profile()
    {
        return view('layouts.profile',
        [
            'meta_title' => '',
            'meta_description' => '',
        ]);
    }

    public function index_dashboard()
    {
        return view('layouts.dashboard',[
            'meta_title' => '',
            'meta_description' => '',
        ]);
    }

}
