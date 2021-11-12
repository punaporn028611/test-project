<?php

use App\Http\Controllers\CategoryController;
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

//admin
Route::get('/admin/index','AdminController@index')->name('index');

//Category
Route::get('/admin/category','CategoryController@index');
Route::post('/admin/category/create','CategoryController@creat')->name('creat');
Route::get('/admin/category/edit/{id}','CategoryController@edit');

//Product
Route::get('/admin/product','ProductController@index');

Auth::routes();
Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
