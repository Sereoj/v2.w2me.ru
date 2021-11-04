<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = new UserResource(auth()->user());

        return view('pages.profile',
            [
                'header' => 'Профиль',
                'meta_title' => '',
                'meta_description' => '',
                'user' => $user,
                'image' => $user->photo != null ? $user->photo->path : 'https://site112.com/img/200x200.png'
            ]);
    }

    public function store(Request $request)
    {
        return redirect()->route('user.edit');
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('user.logout');
    }
}
