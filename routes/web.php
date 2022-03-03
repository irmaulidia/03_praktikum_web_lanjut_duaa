<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;



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



Route::get('/home', function () {
    return view('home');
});

// Route::prefix('game')->group(function(){
//     Route::get('/list-game', function () {
//         return view('product');
//     });
// });

// Route::get('news', function () {
//     return view('news', ['news' => 'news','topic' => 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19']);
// });

// Route::prefix('program')->group(function(){
//     Route::get('/daftar-program', function () {
//         return view('program');
//     });
// });

// Route::get('/about-us', function () {
//     return view('about-us');
// });

// //Route::resource('/contact-us', view('contact-us'));

// Route::resource('contact', contactController::class);

//praktikum 2
Route::get('/', [HomeController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);