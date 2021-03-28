<?php
use App\Http\Controllers\HomeController;

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
    //return view('welcome');
    echo "welcome";
});



Route::get('/login', 'loginController@index')->name('login');
Route::post('/login', 'loginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout');

Route::get('/registration', 'RegController@index')->name('registration');
Route::post('/registration', 'RegController@store')->name('reg');

Route::group(['middleware'=> 'sess'], function(){

    Route::group(['middleware'=>'admin'],function(){

    Route::get('/home', 'HomeController@index')->name('index');
    Route::get('/registration', 'RegController@index')->name('registration');
    Route::post('/registration', 'RegController@store')->name('reg');
});
Route::group(['middleware'=>'moderator'],function(){

    Route::get('/home', 'HomeController@index')->name('index');
    
});
});