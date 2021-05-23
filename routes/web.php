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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home',function(){
    return view('home');
});

// Route::get('/home','App\Http\Controllers\UserController@index');

Route::post('/upload','App\Http\Controllers\UserController@uploadAvatar');
Route::get('/profile','App\Http\Controllers\UserController@edit')->name('profile.edit');
Route::get('/updateUser','App\Http\Controllers\UserController@edit')->name('profile.update');

Route::get('/product/create','App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/product/store','App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('/product/homepage','App\Http\Controllers\ProductController@show')->name('product.show');
Route::delete('/product/delete/{product}','App\Http\Controllers\ProductController@destroy')->name('product.destroy');
Route::get('/product/edit/{product}','App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::patch('/product/update/{product}','App\Http\Controllers\ProductController@update')->name('product.update');


