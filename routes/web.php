<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/blood-donation-process', function () {
    return view('donner');
});

Route::get('/search', function () {
    return view('search');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
