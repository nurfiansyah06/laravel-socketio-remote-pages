<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/testing', [App\Http\Controllers\TokenDashboardController::class,'index']);
Route::prefix('admin')->group(function () {
    // Dashboard Page
    Route::get('/',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    // List Token
    Route::get('/token',[App\Http\Controllers\Admin\TokenController::class,'index']);
    Route::post('/token/createtoken',[App\Http\Controllers\Admin\TokenController::class,'createToken']);
    Route::delete('/token/deletetoken/{token_id}',[App\Http\Controllers\Admin\TokenController::class,'deleteToken']);

    // Remote Page
    Route::get('/listtoken',[App\Http\Controllers\Admin\RemoteController::class,'index']);
    Route::get('/remotetoken',[App\Http\Controllers\Admin\RemoteController::class,'remotePage']);

    //list guest
    Route::get('/page2',[App\Http\Controllers\Admin\TokenController::class, 'listGuest']);
});

Route::get('/page-tamu/{token}', function () {
    broadcast(new App\Events\GuestEvent());
    return redirect()->back();
});

Route::get('/page-admin/{token}', function() {
    broadcast(new App\Events\AdminEvent());
    return redirect()->back();
});

// Route::get('/receiver', [App\Http\Controllers\Admin\TokenController::class, 'listGuest']);
Route::get('/receiver/{token}',[App\Http\Controllers\Admin\TokenController::class,'receiverByToken']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/sendtoken',[App\Http\Controllers\TokenDashboardController::class,'sendtoken']);
Route::get('/layout', function () {
    return view('layout');
});
