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
Route::resource('vaccins','App\Http\Controllers\VaccinController');
Route::resource('vaccinations','App\Http\Controllers\VaccinationController');
Route::get('/pdf','App\Http\Controllers\VaccinController@pdf')->name('vaccins.pdf');
Route::get('/vaccination/pdf','App\Http\Controllers\VaccinationController@pdf')->name('vaccinations.pdf');