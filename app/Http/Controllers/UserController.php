<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return view("register.index");
    }
    public function storeUser(Request $request)
    {
        $password = Hash::make($request->password);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->save();
        // redirect to login page
        return redirect()->route("login");
    }

    public function login()
    {
        return view("login.index");
    }

    public function authenticate(Request $request)
    {
        // $credentials = ["email" => $request->email,"password" => $request->password];
        // dd($request);

        // request validation part
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route("logOutPage");
        }
        return "Error";
    }
    public function logOutPage()
    {
        return view("login.logout");
    }
    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("login");
    }
}