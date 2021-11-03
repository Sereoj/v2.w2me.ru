<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        return $user->update($request->all());
    }


    public function destroy(User $user)
    {
        $user->delete();

        return [
            'user' => $user->name,
            'action' => 'delete',
            'status' => 'success'
        ];
    }
}
