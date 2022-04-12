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
Route::get('/', 'App\Http\Controllers\controle@index' );

Route::get('/login', 'App\Http\Controllers\controle@login' );
Route::get('/register', 'App\Http\Controllers\controle@register' );
Route::get('/comment', 'App\Http\Controllers\controle@comment' );
Route::get('/add', 'App\Http\Controllers\controle@add' );
Route::get('/edit', 'App\Http\Controllers\controle@edit' );
Route::get('/admin', 'App\Http\Controllers\controle@admin' );