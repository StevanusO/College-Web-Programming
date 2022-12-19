<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


// use Socialite;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->where('social_type', 'google')->first();
            if ($finduser) {

                Auth::login($finduser);

                return view('home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google'
                ]);

                Auth::login($newUser);

                return view('home');
            }
        } catch (Exception $e) {
            dd('Something Went Wrong!' . $e->getMessage());
        }
    }
}
