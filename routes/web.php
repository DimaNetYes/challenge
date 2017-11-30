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


Auth::routes();

                                       //Страницы без авторизации


Route::group(['prefix' => 'users', 'middleware' => ['web']], function () {
    //страничка с квестами (надо сделать только с доступными квестами)
    Route::get('/view', ['uses' => 'Users\UsersQuestController@view', 'as' => 'user_view_quest']);
    //Подробная информация о квесте (после нажатия на кнопку more)
    Route::get('/more/quest', ['uses' => 'User\UsersQuestController@more', 'as' => 'more']);
});

                                           //для залогиненного пользователя

Route::group(['prefix' => 'users', 'middleware' => ['web', 'auth']], function () {
    //планируемый маршрут при выборе user-ом квеста на выполнение(надо делать)
    Route::get('/do', ['uses' => 'Users\UsersQuestController@do', 'as' => 'user_do_quest']);

});

