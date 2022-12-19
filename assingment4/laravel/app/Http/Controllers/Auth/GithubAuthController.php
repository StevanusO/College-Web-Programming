<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            $finduser = User::where('social_id', $user->id)->where('social_type', 'github')->first();
            if ($finduser) {

                Auth::login($finduser);

                return view('home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'github'
                ]);

                Auth::login($newUser);

                return view('home');
            }
        } catch (Exception $e) {
            dd('Something Went Wrong!' . $e->getMessage());
        }
    }
}
