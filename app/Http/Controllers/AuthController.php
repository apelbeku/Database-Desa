<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->only(['login', 'login_process', 'register', 'register_process']);
        $this->middleware('auth')->only('logout');
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function login_process(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('name', 'password');
        
        $is_loginSucess = Auth::attempt($credentials);

        if($is_loginSucess) {
            return redirect()->intended('/');
        } else{
            return redirect()->back();
        }


    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function register_process(Request $request)
    {
        $password = bcrypt($request->password);

        $request->merge([
            'password' => $password,
            'role' => 'user'
        ]);

        User::create($request->all());

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
