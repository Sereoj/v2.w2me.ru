<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

        view('layouts.app', [
            'meta_title' => 'hello',
            'meta_description' => '',
        ]);

        return view('layouts.login');
    }

    public function index_register()
    {
        return view('layouts.register',[
            'meta_title' => '',
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

    public function create(Request $request)
    {
        $validation = Validator::make($request->all() ,[
            'name'   =>  'required',
            'email'     =>  'required|unique:users',
            'password'    =>  'required',
        ]);

        $this->createRoles();
        $this->createTypes();

        if(!$validation->fails())
        {
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
        }
        return redirect()->route('user.register')->withErrors($validation);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($validation)) {
            return redirect()->route('index');
        }
        return redirect()->route('user.login')->withErrors($validation);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
