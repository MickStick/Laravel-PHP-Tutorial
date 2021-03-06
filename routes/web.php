<?php

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

Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');
Route::post('/contact/send', 'ContactController@send');

Route::resource('posts','PostsController');
Route::get('/posts/posts/create', function(){
    return redirect('/posts/create');
});



Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');
