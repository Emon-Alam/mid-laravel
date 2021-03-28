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

Route::group(['middleware'=>'sess'],function(){

Route::group(['middleware'=>'admin'],function(){
  

    Route::get('/home', 'HomeController@index')->name('index');

    Route::get('/registration', 'RegController@index')->name('registration');
    Route::post('/registration', 'RegController@store')->name('reg');

    Route::get('/home/admin/Profile', 'AdminController@show')->name('Aprofile');

    Route::get('/home/list/moderator', 'AdminController@userlist')->name('moderator.userlist');

    Route::get('/home/delete/moderator/{id}', 'AdminController@delete')->name('moderator.delete');
    Route::post('/home/delete/moderator/{id}', 'AdminController@destroy');

    Route::get('/home/create/content', 'AdminController@create')->name('ccreate');
    Route::post('/home/create/content', 'AdminController@store');

    Route::get('/home/list/content', 'AdminController@Clist')->name('clist');

    Route::get('/home/delete/category/{id}', 'AdminController@cdelete')->name('cdelete');
    Route::post('/home/delete/category/{id}', 'AdminController@cdestroy');

});
Route::group(['middleware'=>'moderator'],function(){

    Route::get('/home', 'HomeController@index')->name('index');
    Route::get('/home/moderator/Profile', 'ModeratorController@show')->name('profile');

    
    Route::get('/home/create/content', 'AdminController@create')->name('ccreate');
    Route::post('/home/create/content', 'AdminController@store');

    Route::get('/home/list/content', 'AdminController@Clist')->name('clist');

    Route::get('/home/delete/category/{id}', 'AdminController@cdelete')->name('cdelete');
    Route::post('/home/delete/category/{id}', 'AdminController@cdestroy');
});

});

