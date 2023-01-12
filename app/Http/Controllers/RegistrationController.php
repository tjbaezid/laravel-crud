<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class RegistrationController extends Controller
{
    public function index(){
        if(Auth::check()){
              return redirect('profile');
        }
        return view('registration');
        
    }
        
    public function storeuser(Request $req){

       // return $req->input(All);
       $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);
        //$user = new User;
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        //$req->save();
        
        //return $user;
        return redirect('login');
    }
}
