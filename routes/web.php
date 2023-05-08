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
        'Login',
        'About',
        'Shop',
        'Contacts',
        'Blog'
    ];

    return view('home', compact('one', 'two', 'links'));
});

Route::get('Login', function () {
    return view('Login');
})->name('Login');

Route::get('About', function () {
    return view('About');
})->name('About');

Route::get('Shop', function () {
    return view('Shop');
})->name('Shop');

Route::get('Contacts', function () {
    return view('Contacts');
})->name('Contacts');

Route::get('Blog', function () {
    return view('Blog');
})->name('Blog');