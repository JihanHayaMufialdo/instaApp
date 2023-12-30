<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function login_attempt(Request $request){
        if(!Auth::attempt($request->only(['username','password']))){
            return back()->with('error','Akun Pengguna atau Kata Sandi Anda tidak sesuai')->withInput($request->all());
        }

        $user = User::where('username', $request->username)->firstOrFail();

        Auth::login($user);

        return to_route('home');
    }

    public function logout(){
       Auth::logout();
       return to_route('login');
    }

    public function register(){
        return view('auth.register');
    }

    public function register_attempt(Request $request){
        $data = [
            'email'     => $request->email,
            'username'  => $request->username,
            'password'  => bcrypt($request->password)
        ];

        $user = User::where('username', $request->username)->first();

        if($user){
            return back()->with('error','Username has taken')->withInput();
        }

        $user = new User($data);

        $user->save();

        return to_route('login')->with('success','Registration success');
    }
}
