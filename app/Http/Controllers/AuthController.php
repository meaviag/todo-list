<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    
    public function create()
    {
        return view('autho');
    }

    public function store(AuthRequest $request)
    {
        $credentials = $request->validate([
            'email'=>['required', 'string', 'email'],
            'password'=>['required', 'string']
        ]);
        if(! Auth::attempt($credentials,$request->boolean('remember'))){
        throw ValidationException::withMessages([
            'password' => 'Неверный пароль или логин'
        ]);
        }
        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
