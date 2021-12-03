<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email',$request->email)->first();
        if ($user && $user->google_id != null) {
            return redirect()->back()->with('error','Please Login With Google');
        }
        if ($user && Hash::check($request->password, $user->password))
        {
            Auth::login($user);
            return redirect('/home')->with('success','Login Successful');
        }
        // if (!$user)
        // {
        //     return response()->json(['user' => 'Invalid','message' => 'This email/username has not been registered.']);
        // }
        return back()->with('error','Please check your submission and try again.');
    }
}
