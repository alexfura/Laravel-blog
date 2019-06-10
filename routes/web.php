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

/**
 * Route pattern for id field
 */
Route::pattern('id', '[0-9]+');
/**
 * Home page
 */
Route::get('/', 'HomeController')->name('home');
/**
 * Page with articles
 */
Route::get('articles', 'ArticleController@index')->name('articles');
/**
 * Page with article by id
 */
Route::get('articles/{id}', 'ArticleController@show')->name('article');
/**
 * Page for topic and article by topic
 */
Route::get('articles/topic/{id}', 'ArticleController@getArticleByTopic')->name('article-by-topic');

/**
 *
 */
