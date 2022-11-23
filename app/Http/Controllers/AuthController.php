<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginForm(){
        if(auth()->check()){
            return redirect('/admin/dashboard');
        }


        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'username'          =>      'required|string',
            'password'          =>      'required|string'
        ]);

        $login = auth()->attempt([
            'username' =>   $request->username,
            'password' =>   $request->password,

        ]);
        if(!$login){
            return back()->with('error', 'Invalid credentials');
        }
        return redirect('admin/dashboard');

    }

    public function registerForm(){
        if(auth()->check()){
            return redirect('/admin/dashboard');
        }

        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'username'                  =>      'required|string',
            'password'                  =>      'required|string|min:8',
        ]);

        // $token = Str::random(24);

        $user = User::create([
            'username'                  =>      $request->username,
            'password'                  =>      bcrypt($request->password),
        ]);

        // Mai
        return redirect('/admin/login')->with('message','Please log in.');
        // ->with('message', "Kindly check your email for verification.")

    }

    public function logout(){
        auth()->logout();
        return redirect('/admin/login');
    }
}
