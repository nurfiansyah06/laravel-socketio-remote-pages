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
});

Route::get('/send', function () {
    broadcast(new App\Events\EveryoneEvent());
    return redirect()->back();
});

Route::get('/page1', function() {
    broadcast(new App\Events\FirstPageEvent());
    return redirect()->back();
});

Route::get('/receiver', [App\Http\Controllers\ReceiveController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/sendtoken',[App\Http\Controllers\TokenDashboardController::class,'sendtoken']);
