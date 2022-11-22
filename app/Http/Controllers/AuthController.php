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
            'email'         =>      'required|email',
            'password'      =>      'required|string'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at == null){
            return redirect('/admin/login')->with('error', 'Sorry your account is not yet verified or does not exist');
        }

        $login = auth()->attempt([
            'email'             =>          $request->email,
            'password'          =>          $request->password,
        ]);

        if(!$login){
            return back()->with('error', 'Invalid credentials');
        }

        if(Auth::user()->role_as == '1'){
            return redirect('admin/dashboard');
        }
        else{
            return redirect('/home');
        }
    }

    public function registerForm(){
        if(auth()->check()){
            return redirect('/admin/dashboard');
        }

        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name'                 =>      'required|string',
            'email'                 =>      'required|email|unique:users',
            'password'              =>      'required|confirmed|string|min:8',
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name'                  =>      $request->name,
            'email'                 =>      $request->email,
            'password'              =>      bcrypt($request->password),
            'remember_token'        =>      $token
        ]);

        Mail::send('auth.verification-mail', ['user' => $user], function($mail) use($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
        });

        return redirect('/admin/login')->with('message', "Kindly check your email for verification.");
    }

    public function verification(User $user, $token){
        if($user->remember_token !== $token){
            return redirect('/admin/login')->with('error', 'Invalid token. The attached token is invalid or has already been consumed.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/admin/login')->with('message', 'Your account has been verified.');
    }

    public function logout(){
        auth()->logout();
        return redirect('/admin/login');
    }
}
