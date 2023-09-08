<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\UserHasRole;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->remember)) {
            // Authentication was successful
            return redirect()->intended('home'); // Redirect to a desired page
        }
    
        // Authentication failed
        return redirect()->route('login')
            ->withErrors(['email' => 'These credentials do not match our records.'])
            ->withInput($request->except('password'));
    }
    // login form
    public function loginForm(){
        return view('user/login');
    }
    public function registerForm(){
        return view('user/register');
    }

    // register form
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $lastRole =role::latest()->first();
        $assignRole = UserHasRole::create([
            'user_id'=>$user->id,
            'role_id'=>$lastRole->id
        ]);
        if($assignRole){
           auth()->login($user);
           return redirect(RouteServiceProvider::HOME);
        }else{
            return redirect()->back()->with('unsuccess','please try again');
        }
    }
    public function logout(){
        auth()->logout();
        return redirect(RouteServiceProvider::HOME);
    }
}
