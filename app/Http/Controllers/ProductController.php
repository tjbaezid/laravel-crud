<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;

class ProductController extends Controller
{

    function getProduct($id){
         $product = Product::find($id);
         if(!$product){
             return redirect ('profile/add-product');
         }
         return view('edit-product', ['product'=> $product]);     
    }
    
    //Add New Product
    function addProduct(Request $req){
            
        $user_id = Auth::id();
        $product = New product;
        $product->title = $req->title;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->user_id = $user_id;
        
        $product->save();
        
        return redirect ('profile');

    }
    
    //Update Product
    function editProduct(Request $req){
        $product = Product::find($req->id);
       
        $product->title = $req->title;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->user_id = Auth::id();
        
        $product->save();
        
        return redirect ('profile');

    }
    //Delete Product
   function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        
        return redirect ('profile');
   }
}
