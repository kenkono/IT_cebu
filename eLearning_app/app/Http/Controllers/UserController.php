<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showUsers() {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function showFollowing(){
        $users = Auth::user()->following()->get();
        return view('users.followinglist', compact('users'));
    }

    public function showFollowers(){
        $users = Auth::user()->followers()->get();
        return view('users.followerslist', compact('users'));
    }

    public function follow($id) {
        Auth::user()->following()->attach($id);

        return redirect()->back();
    }

    public function unfollow($id) {
        Auth::user()->following()->detach($id);

        return redirect()->back();
    }

    public function edit($id) {
        $user = User::find($id);

        return view('users.editUser', compact('user'));
    }

    public function editStore($id)
    {
        $user = Auth::user()->update([
            'name' => request()->name,
            'email' => request()->email,
        ]);

        return redirect('home');
    }

    public function showUser($id)
    {
        
        $user = User::find($id);
        $blogs = $user->blogs;
        return view('users.userinfo', compact('blogs', 'user'));
    }

    public function changePassword($id) {
        $user = User::find($id);

        return view('users.changePassword', compact('user'));
    }

    public function passwordStore($id)
    {
        // password check
        if(request()->password){

            request()->validate([
                'password' => ['required', 'min:6', 'confirmed']
            ]);

            if(Hash::check(request()->current_password, Auth::user()->password)){
                Auth::user()->update([
                    'password' => Hash::make(request()->password)
                ]);
            } else {
                return "incorrect password";
            }
            
        }

        return redirect('home');
    }

}

