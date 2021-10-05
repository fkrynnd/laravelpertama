<?php

use App/Http/Controllers/CobaController;

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

Route::get('/coba', function () {
    return view('welcome');
});

Route::get('/coba/{no}', function ($no) {
    return 'coba ke- '. $no;
});

Route::get('/tes', [CobaController::class, 'index'])
Route::get('/tes/{ke}', [CobaController::class, 'urutan'])