<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {

        if ( Auth::attempt($request->only('email', 'password'))) {
            $request->authenticate();

            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back();

    }

    public function destroy(Request $request)
    {

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
