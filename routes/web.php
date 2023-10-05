<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/gallery', function () {
    return view('gallery');
 });
Route::get('/carts', function () {
    return view('carts');
}); 
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/cart', function () {
    return view('place your order');
});