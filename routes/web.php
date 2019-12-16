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

Route::get('/', 'AccueilController@getHome');

Route::get('/', 'InformationsController@getInformations');

Route::get('/', 'MembersController@getMembers');

Route::get('/', 'SearchController@getSearch');

Route::get('/', 'SigninFormController@getSigninForm');
