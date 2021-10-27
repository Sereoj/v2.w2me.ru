<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Models\user_role;
use App\Models\user_type;
use Illuminate\Http\Request;
use Validator;

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

    public function createRoles()
    {
        $values = ['user', 'administrator', 'moderator'];

        if(user_role::count() == 0)
        {
            foreach ($values as $value)
            {
                $role = new user_role(['name' => $value]);
                $role->save();
            }
        }
    }

    public function createTypes()
    {
        $values = ['free', 'premium'];

        if(user_type::count() == 0)
        {
            foreach ($values as $value)
            {
                $role = new user_type(['type' => $value]);
                $role->save();
            }
        }
    }

    public function create(UserCreateRequest $request)
    {
        $this->createRoles();
        $this->createTypes();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'user_type_id' => 1,
            'user_role_id' => 1
        ]);

        if($user != null || $user != false)
        {
            auth()->login($user);
            return redirect()->route('user.profile');
        }

        return redirect()->route('user.register')->withErrors($request->validated());
    }

    public function store(UserStoreRequest $request)
    {

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('index');
        }
        return redirect()->route('user.login')->withErrors($request->validated());
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
