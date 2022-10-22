<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index');
});

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');

Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@create')->name('contact.create');
Route::get('/confirm', 'App\Http\Controllers\ContactController@confirm');

Route::post('/confirm/thanks', 'App\Http\Controllers\ContactController@register')->name('contact.register');

// Route::get('/register', 'App\Http\Controllers\ContactController@confirm');
// Route::post('/register', 'App\Http\Controllers\ContactController@register')->name('contact.confirm');
