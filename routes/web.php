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

Route::get('/vista', function () {
    $principalNumber = 100;
    return view('vista',compact("principalNumber"));
});

Route::resource('flights', App\Http\Controllers\ControllerFlight::class)->names('flights');
