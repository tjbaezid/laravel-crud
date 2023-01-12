<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('registration');
});

Route::get('register',[RegistrationController::class,'index']);
Route::post('registration',[RegistrationController::class,'storeuser']);

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class, 'access']);


Route::middleware(['auth'])->group(function () {
  Route::view('profile','dashboard');

Route::get('profile',[DashboardController::class,'product']);


Route::view('/profile/add-product', 'add-product');
Route::post('/profile/add-product', [ProductController::class,'addProduct']);


Route::get('/profile/edit-product/{id}', [ProductController::class,'getProduct']);
Route::post('/profile/edit-product/{id}', [ProductController::class,'editProduct']);

Route::get('/profile/delete-product/{id}', [ProductController::class,'deleteProduct']);

  //
});

Route::post('logout',[LogoutController::class,'logout']);

