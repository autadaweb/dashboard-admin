<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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





Route::get('/login', 'Auth\Login@index')->name('login')->middleware('guest');
Route::post('/auth', 'Auth\Login@login')->middleware('guest');


Route::group(['middleware' => ['auth', 'session.expired']], function () {






Route::middleware('auth')->group(function () {

    

    Route::get('/', 'Home\Home@index');
    Route::get('/home', 'Home\Home@index');

    Route::get('/ganti-sandi', function(){

        return view('login.ganti-sandi');

    });



   
    Route::post('/logout', 'Auth\Login@logout');






});





});



