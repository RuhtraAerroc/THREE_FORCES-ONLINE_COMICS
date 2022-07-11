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
//Start
Route::get('/start', function () {
    return view('start.start_Index');
});

//Model
// Route::get('/', function () {
//     return view('welcome');
// });
