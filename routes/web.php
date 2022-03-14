<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    $data = [
        'hello' => [
            'laravel 7.30.1',
            'php 8.0.1',
            'powershell is bad',
            'Gioele'
        ]
    ];

    return view('home', $data);
});

Route::get('/hello', function () {
    return view('hello');
})->name('hello');
