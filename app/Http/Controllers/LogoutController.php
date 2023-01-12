<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
/**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function logout(Request $req)
    {
        Auth::logout();
     
        $req->session()->invalidate();
     
        $req->session()->regenerateToken();
     
        return redirect('login');
    }
}
