<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

class PagesController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function about()
    {
        return view('page.about');
    }

    public function profile()
    {
        // $profile = Profile::find($id);
        // $profiles = Profile::all();
        // $profiles = User::all();
        // return view('page.profile',['profiles'=>$profiles,'layout'=>'index']);
        $user=\Auth::user();
        return view ('page.profile', ['user'=>$user]);
    }

    public function apply()
    {
        return view('page.apply');
    }
}
