<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user =  User::where(['nip' => $req->nip])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or Password id not match";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
