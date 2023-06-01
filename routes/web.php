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

    $name = 'Ciccillo';
    $lastname = 'Cacace';
    return view('homepage', compact('name', 'lastname'));
})->name('homepage');

Route::get('/about', function () {
    $data = [
        'name' => 'Giuseppe',
        'lastname' => 'Verdi'
    ];
    return view('about-us', $data);
})->name('about');
