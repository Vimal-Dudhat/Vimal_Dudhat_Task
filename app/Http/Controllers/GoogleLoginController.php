<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id',$user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            }else{
                $newuser = new User;
                $newuser->first_name = $user->user['given_name'];
                $newuser->last_name = $user->user['family_name'];
                $newuser->email = $user->email;
                $newuser->google_id = $user->id;
                $newuser->save();
                Auth::loginUsingId($newuser->id);
                return redirect('/home');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
