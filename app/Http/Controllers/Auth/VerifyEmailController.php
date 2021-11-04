<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function index()
    {
        return view('auth.verify-email');
    }

    public function verify(Request $request)
    {
        if($request->user()->hasVerifiedEmail())
        {
            return redirect()->route('index');
        }
        if ($request->user()->markEmailAsVerified())
        {
            event(new Verified($request->user()));
        }
    }

    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('index');
        }
        $request->user()->sendEmailVerificationNotification();

        return $request->wantsJson()
            ? new JsonResponse([], 202)
            : back();
    }
}
