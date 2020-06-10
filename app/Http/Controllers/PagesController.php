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
       
        $user=\Auth::user();
        return view ('page.profile', ['user'=>$user]);
    }

    public function edit($id)
    {
        $profile = User::find($id);
        return view ('page.editProfile')->with('profile',$profile);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'mobile'=>'required',
            'email'=>'required'


        ]);

        $edit = User::find($id);
        $edit->mobile = $request->input('mobile');
        $edit->email = $request->input('email');
        $edit->save();
        return redirect('/profile')->with('success', 'Profile Updated');
    }
    public function apply()
    {
        return view('page.apply');
    }
}
