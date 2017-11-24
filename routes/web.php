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

//-----------------------------
Route::get('/', 'IndexController@Index');
Route::get('public/login', 'IndexController@login');

Route::get('google', ['uses' => 'GoogleController@redirectToProvider', 'as' => 'google']);
Route::get('google/callback', 'GoogleController@handleProviderCallback');

Route::get('/redirect', ['uses'=>'SocialAuthFacebookController@redirect', 'as' => 'facebook']);
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/view', ['uses' => 'Users\UsersQuestController@view', 'as' => 'user_view_quest']);

//--------------------------------------------------------------

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', ['uses' => 'Admin\AdminController@show', 'as' => 'admin_index']);
    Route::get('/add/quest', ['uses' => 'Admin\AdminQuestController@add', 'as' => 'admin_add_quest']);
    Route::post('/create/quest', ['uses' => 'Admin\AdminQuestController@create', 'as' => 'post']);
    Route::get('createTask', ['uses' => 'Admin\TaskQuestController@add', 'as' => 'createTask']);
    Route::post('/create/task', ['uses' => 'Admin\TaskQuestController@create', 'as' => 'postTask']);
});

Route::group(['prefix' => 'users', 'middleware' => ['web', 'auth']], function () {
    Route::get('/do', ['uses' => 'Users\UsersQuestController@do', 'as' => 'user_do_quest']);
   // Route::get('/view', ['uses' => 'Users\UsersQuestController@view', 'as' => 'user_view_quest']);
    Route::get('/more/quest', ['uses' => 'User\UsersQuestController@more', 'as' => 'more']);
});

