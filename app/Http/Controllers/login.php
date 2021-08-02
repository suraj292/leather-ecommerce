<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class login extends Controller
{
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
//        dd($user);
        $findUser = User::where('email', $user->email)->first();
        if ($findUser){
            Auth::login($findUser);
            return redirect(route('home'));
        }else{
            $newUser = User::create([
               'name' => $user->name,
               'avatar' => $user->avatar,
               'email' => $user->email,
               'social_network' => 'GOOGLE',
            ]);
            Auth::login($newUser);
            return redirect(route('home'));
        }
    }
}
