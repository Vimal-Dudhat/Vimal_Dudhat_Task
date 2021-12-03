<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $pref = Auth::user()->partner;
        $users = User::all();
        if ($pref) {
            $partner_occupation = explode(',',$pref->occupation);
            $partner_family_type = explode(',',$pref->family_type);
            $gen = (Auth::user()->gender == "male") ? "female" : "male";
    
            $partner_pref = User::where('id','!=',Auth::id())
                        ->where('gender',$gen)
                        ->whereBetween('annual_income',[$pref->expected_min_income,$pref->expected_max_income])
                        ->whereIn('occupation',$partner_occupation)
                        ->whereIn('family_type',$partner_family_type);
    
            $users = $partner_pref->paginate(15);
    
            if ($pref->manglik != "both") {
                $users = $partner_pref->where('manglik', $pref->manglik)->paginate(15);
            }
        }
        return view('home-page',compact('users'));
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
