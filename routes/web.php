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



Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');

// Route::get('/contact/confirm', 'App\Http\Controllers\ContactController@create')->name('contact.creating');
Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@create')->name('contact.create');

Route::post('/contact/thanks', 'App\Http\Controllers\ContactController@register')->name('contact.register');

Route::get('/manage', 'App\Http\Controllers\ContactController@find')->name('contact.find');
Route::get('/search', 'App\Http\Controllers\ContactController@search')->name('contact.search');

Route::post('/delete', 'App\Http\Controllers\ContactController@delete')->name('contact.delete');


