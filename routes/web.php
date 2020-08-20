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


Route::get('/login', 'AuthController@index')->name('login');


Route::post('/proses', 'AuthController@proses');

Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' =>'auth'], function(){
    
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::livewire('/post', 'post.index')->name('post.index');
    Route::livewire('/create', 'post.create')->name('post.create');
    Route::livewire('/edit/{id}', 'post.edit')->name('post.edit');
    
    Route::get('/profile', 'PagesController@profile');
    
    Route::get('/course', 'CourseController@index');
    
    Route::get('/course/create', 'CourseController@create');
    
    Route::post('/course', 'CourseController@store');
    
    Route::get('/course/{id}/delete', 'CourseController@destroy');
    
    Route::get('/course/{id}/update', 'CourseController@edit');
    
    Route::post('/course/{id}/update', 'CourseController@update');
    
    Route::get('/student','StudentController@index');

    Route::group(['prefix' => 'admin','middleware'=> ['middleware_1', 'middleware_2']], function()
    {
    Route::get('/tes1','HomeController@actiontes1');
    Route::get('/test2','HomeController@actiontes2');
    });

});
