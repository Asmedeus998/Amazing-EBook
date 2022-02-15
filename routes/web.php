<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Models\EBook;

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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/user', 'middleware' => ['validateUser', 'auth']], function (){
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile/update', [ProfileController::class, 'update']);
    Route::get('/detail/{id}', [DetailController::class, 'detail']);
    Route::get('/cart', [CartController::class, 'view']);


    Route::post('/cart/add/{id}', [CartController::class, 'add']);
    Route::delete('/cart/delete/{id}', [CartController::class, 'delete']);
    Route::post('/cart', [CartController::class, 'submit']);


});

Route::group(['prefix' => '/admin', 'middleware' => ['validateAdmin', 'auth']], function (){
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile/update', [ProfileController::class, 'update']);
    Route::get('/detail/{id}', [DetailController::class, 'detail']);
    Route::post('/cart/add/{id}', [CartController::class, 'add']);
    Route::delete('/cart/delete/{id}', [CartController::class, 'delete']);
    Route::delete('/cart', [CartController::class, 'submit']);
    Route::get('/cart', [CartController::class, 'view']);
    Route::post('/cart', [CartController::class, 'submit']);

    Route::get('/account_maintenance', [ProfileController::class, 'view_users']);
    Route::get('/udpate_role/{id}', [ProfileController::class, 'change_role']);
    Route::delete('/account_maintenance/{id}', [ProfileController::class, 'delete']);
});
