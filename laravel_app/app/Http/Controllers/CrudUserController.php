<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CrudUserController extends Controller
{
    public function viewUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('auth.view', ['messi' => $user]);
    }
}
