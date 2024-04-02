<?php

namespace App\Http\Controllers;

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