<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getLogin() {
        return view('login');
    }

    public function validates(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ]);
        
        if(Auth::attempt(['email'=>$request->email, 'password' => $request->password])){
            $remember = $request->rememberMe;
            if(!empty($remember)) Auth::login(Auth::user()->id, true);
            return redirect('/home');
            
        }
        return redirect('/login')->withErrors('E-mail Address or Password are Incorrect');

    }


    public function getRegister() {
        return view('register');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|same:confirmation'
        ]);
        User::create([
            'name'=>$request->name, 
            'email'=>$request->email, 
            'password'=>Hash::make($request->password),
            'role_id' =>2
        ]);
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect()->to('/login');
    }
}
