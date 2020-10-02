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

Route::get('/', 'indexcontroller@formulaire');
Route::post('/', 'indexcontroller@traitement');
Route::view('/blog-list', 'blog-list');
Route::view('/blog-list1','blog-list1');


Route::get('/about', function () {
    return view('about');
});

Route::get('/comments/{url}', 'commentscontroller@index');
Route::get('/blog-post', 'pagecontroller@index');


Route::view('/welcome', 'welcome');

Route::post('/comments', 'commentscontroller@store');

