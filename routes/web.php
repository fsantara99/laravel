<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('profile',[
        "title" => "Profile"
    ]);
})->middleware('auth');

Route::get('/ecertificate', function () {
    return view('ecertificate',[
        "title" => "Ecertificate"
    ]);
})->middleware('auth');

Route::get('/krs', function () {
    return view('krs',[
        "title" => "KRS"
    ]);
})->middleware('auth');

Route::get('/faq', function () {
    return view('faq',[
        "title" => "FAQ"
    ]);
})->middleware('auth');

Route::get('/validation', function () {
    return view('validation',[
        "title" => "Validation"
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


