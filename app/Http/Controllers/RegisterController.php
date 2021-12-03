<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;
use App\User;
use App\PartnerPreference;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(CreateUser $request)
    {
        // dd($request->occupation);
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->annual_income = $request->annual_income;
        $user->occupation = $request->occupation ? $request->occupation : null;
        $user->family_type = $request->family_type ? $request->occupation : null;
        $user->manglik = $request->manglik;
        $user->save();

        Auth::login($user);

        return redirect('home');
    }

    public function partnerPrefCreate()
    {
        if (!Auth::user()) {
            return redirect('/');
        }
        if (Auth::user()->partner) {
            return redirect('home');
        }
        return view('partner-preference');
    }

    public function partnerPrefstore(Request $request)
    {
        $user = new PartnerPreference;
        $user->user_id = Auth::id();
        $user->expected_min_income = $request->min_value;
        $user->expected_max_income = $request->max_value;
        $user->occupation = implode(',',$request->occupation);
        $user->family_type = implode(',',$request->family_type);
        $user->manglik = $request->manglik;
        $user->save();

        return redirect('home');
    }
}
