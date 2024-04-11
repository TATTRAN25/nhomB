<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
<<<<<<< HEAD

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CrudUserController extends Controller
{
    public function createUser()
    {
        return view('crud_user.create');
    }

    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        
        return redirect("login")->with('success', 'User created successfully');
    }

    public function signOut()
    {
        Auth::logout();

        return redirect("login");
    }
}
=======
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CrudUserController extends Controller
{
    public function viewUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('crud_user.view', ['user' => $user]);
    }
}
>>>>>>> 1-laravel-10x/2-view
=======

use App\Models\User;
use Illuminate\Http\Request;

class CrudUserController extends Controller
{
    // Form upadate user page
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.update', ['user' => $user]);
    }

    // Form post update user
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,id,' . $input['id'],
            'password' => 'required|min:6'
        ]);

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->password = $input['password'];
        $user->email = $input['email'];
        $user->save();

        return redirect("list")->withSuccess("You have updated success");
    }
}
>>>>>>> 1-laravel-10x/4-update
