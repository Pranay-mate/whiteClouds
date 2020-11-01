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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('about');
});
Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/faqs', function () {
    return view('faqs');
});


Route::resource('/bookings', 'App\Http\Controllers\BookingsController');
Route::post('/bookings/submit', 'App\Http\Controllers\BookingsController@store');
Route::post('/bookings/{{$booking->id}}', 'App\Http\Controllers\BookingsController@destroy');
Route::get('/bookings/{{$booking->id}}/edit', 'App\Http\Controllers\BookingsController@edit');
Route::put('/bookings/{{$booking->id}}', 'App\Http\Controllers\BookingsController@update');
