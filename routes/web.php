<?php
use Illuminate\Support\Facades\Auth;
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

// Ruta Base 
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'PageController@posts')->name('posts');
Route::get('post/{post}', 'PageController@post')->name('post');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','Backend\PostController')->middleware('auth')->except('show');