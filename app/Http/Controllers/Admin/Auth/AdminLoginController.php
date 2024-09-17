<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function show(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $user = User::where('email', $request->input('email'))->first();
        if ($user->role == 'customer') {
            toastr()->error('Username hoặc password không chính xác');
            return redirect(route('admin.login'));
        }

        if (Auth::attempt($credentials, $remember)){
            toastr()->success('Đăng nhập thành công');

            $user = Auth::user();
            return redirect(route('dashboard'));
        }
        toastr()->error('Username hoặc password không chính xác');
        return redirect(route('admin.login'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
