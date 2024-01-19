<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\User\AfterRegister;

class UserController extends Controller
{
    public function login(){
        return view('auth.user.login');
    }
    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(){
        $callback = Socialite::driver('google')->user();
        $data = [
            'name' => $callback -> getName(),
            'email' => $callback -> getEmail(),
            'avatar' => $callback -> getAvatar(),
            'email_vertified_at' => date('Y-m-d H:i:s', time()),
        ];

        // $user = User::firstOrCreate(['email' => $data['email']], $data);
        $user = User::firstOrCreate(['email' => $data['email']], $data);

        return redirect(route('dashboard'));
}
}
