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
    // return view('welcome');
    return view('login');
})->name('login');
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::post('/user/login', 'LoginController@login')->name('user.login');


Route::get('/user/register', 'RegisterController@index')->name('user.register');
Route::post('/user/store', 'RegisterController@store')->name('user.store');
Route::get('/partner/preference/register', 'RegisterController@partnerPrefCreate')->name('partner-preference.register')->middleware('auth');
Route::post('/partner/preference/store', 'RegisterController@partnerPrefstore')->name('partner-preference.store');

Route::get('auth/google', 'GoogleLoginController@redirectToGoogle')->name('google.login');
Route::get('auth/google/callback', 'GoogleLoginController@handleGoogleCallback');
