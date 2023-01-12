<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
          if(Auth::check()){
              return redirect('profile');
        }
        return view('login');
    }
    
    public function access(Request $req){
        
        $credentials = $req->validate([
            'email' => ['required', 'email'],
           'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
 
            return redirect()->intended('profile');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
}
