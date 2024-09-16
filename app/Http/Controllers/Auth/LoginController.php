<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ];

        if (Auth::attempt($credentials)){
            toastr()->success('Đăng nhập thành công');
            return redirect(route('home'));
        }
        toastr()->error('Username hoặc password không chính xác');
        return redirect(route('auth.login'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login'));
    }
}
