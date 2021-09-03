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

Route::get('/about', function () {
    return view('about'); // both about and contact are inheriting a parant class of layout and custom html entities have been thrown
    // for each child page; contact, about
});

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'name' => 'Laravel 8']); // demostrating passing data to views with an array
});

Route::get('/contact', function () {
    return view('contact');
});
