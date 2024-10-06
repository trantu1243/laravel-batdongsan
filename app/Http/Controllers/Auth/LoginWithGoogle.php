<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class LoginWithGoogle extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        $googleUser = Socialite::driver('google')->user();

        $emailUser = User::where('email', $googleUser->email)
            ->whereNull('google_id')
            ->first();

        if ($emailUser){
            Auth::login($emailUser);
            toastr()->success('Đăng nhập thành công');
            return redirect(route('home'));
        }

        $existingUser = User::where('google_id', $googleUser->id)->first();

        if ($existingUser) {
            toastr()->success('Đăng nhập thành công');
            Auth::login($existingUser);
        } else {

            $newUser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'password' => bcrypt(request(Str::random())),
            ]);
            toastr()->success('Đăng nhập thành công');
            Auth::login($newUser);
        }
    }
}
