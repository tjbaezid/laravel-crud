<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;


class DashboardController extends Controller
{
    public function product(){
        $user_id = Auth::id();
        
        //Get All Products By User_id
        
        $products = Product::where('user_id',$user_id)->get();

         return view('dashboard', ['products'=> $products]);
    }
    
    
    
}
