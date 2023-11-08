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

/*

    (Laragon) Project path: C:/laragon/www/laravel-vue-ecommerce
    (Laragon) Pretty url: http://laravel-vue-ecommerce.test

    Or Run Command in Terminal:
    php artisan serve ->  [http://127.0.0.1:8000] or localhost:8000  [127.0.0.1 = localhost]

*/

Route::get('/', function () {
    return view('welcome');
});
