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
Route::get('/test', function(){
    \Auth::logout();
});
Route::get('/', function(){
    $page = file_get_contents('https://www.pornhub.com/webmasters/search?search=hard&tags[]=Teen&thumbsize=medium');
    return view('home',['page' => $page]);
});

Route::get('/Login', 'homeController@login')->name('login');
Route::name('login')->post('/Login/{pokemon?}', 'Auth\AuthController@login');
Route::get('/Register', 'homeController@register')->name('register');
Route::name('Register')->post('/Register', 'Auth\AuthController@register');

Route::name('logout')->get('/Logout' , 'Auth\AuthController@logout');

Route::name('view.videos')->post('/get/is_active', 'homeController@get');


