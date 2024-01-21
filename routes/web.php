<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/loginAction',[AuthController::class, 'loginAction'])->name('loginAction');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::get('/register_action',[AuthController::class, 'registerAction'])->name('registerAction');
Route::get('/forgot-password',[AuthController::class, 'forgotPassword'])->name('forgotPassword');


Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard/my-acount', [DashboardController::class, 'myAccount'])->name('my_acount');
    Route::post('/dashboard/my-acount', [DashboardController::class, 'myAccountAction'])->name('my_acount_action');
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::get('/state',[AuthController::class, 'StateSelect'])->name('stateSelect');
    // Route::middleware(['auth'])->get('/state',[AuthController::class, 'StateSelect'])->name('stateSelect');
    Route::post('/stateAction',[AuthController::class, 'StateAction'])->name('stateAction');
    Route::get('/dashboard/my_ads',[DashboardController::class, 'myAds'])->name('my_ads');
});







