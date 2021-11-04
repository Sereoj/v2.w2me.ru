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
        return view('auth.login', ['meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function index_register()
    {
        return view('auth.register',[
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

        $user->type()->create([
            'type' => 1,
            'gift_time' => now()->toDate(),
            'cost' => '10000'
        ]);

        $user->role()->create([
            'role' => 'user'
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
        $user = new UserResource(auth()->user());

        return view('pages.profile',
        [
            'header' => 'Первый профиль',
            'meta_title' => '',
            'meta_description' => '',
            'user' => $user,
            'image' => $user->photo != null ? $user->photo->path : 'https://site112.com/img/200x200.png'
        ]);
    }

    public function store_profile(Request $request)
    {
        return redirect()->route('user.edit');
    }

    public function index_edit_profile($params = null)
    {
        $user = new UserResource(auth()->user());

        $args = [
            'header' => 'Редактирование профиля',
            'meta_title' => '',
            'meta_description' => '',
            'user' => $user,
        ];

        $args['style'] = isset($params['validated']) && ($params['validated'] == true) ? 'needs-validation was-validated' : '';
        $args['status'] = isset($params['password']) && ($params['password'] == true);
        $args['status_image'] = isset($params['photo'] ) && ($params['photo'] != null);

        return view('pages.edit_profile',$args);
    }

    public function store_edit_profile(StoreProfileEditRequest $request)
    {
        $params = null;

        $user = Auth::user();
        $user->name = $request->name;

        $params['validated'] = true;
        if($request->new_password != null && $request->old_password != null) {
            $params['password'] = true;
        }

        if($request->photo != null)
        {
            $params['photo'] = $request->photo;

            $path = '/storage/'.$request->photo->store('/','public');

            $user->photo()->create([
                'path' => asset($path)
            ]);
        }

        $user->save();
        return $this->index_edit_profile($params);
    }

    public function index_dashboard()
    {
        return view('layouts.dashboard',[
            'meta_title' => '',
            'meta_description' => '',
        ]);
    }

}
