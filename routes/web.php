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

Route::get('/', 'HomeController')->name('home');
Route::get('articles', 'ArticleController@index')->name('articles');
Route::get('articles/{id}', 'ArticleController@show')->name('article');
Route::get('articles/topic/{slug}', 'ArticleController@getArticleByTopic');
