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
    $one = 'Hello';
    $two = 'World';

    $links = [
        'login',
        'about',
        'shop',
        'contacts',
        'blog'
    ];

    return view('home', compact('one', 'two', 'links'));
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('blog', function () {
    return view('blog');
})->name('blog');