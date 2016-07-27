<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::auth();

Route::get('/home', 'HomeController@index');


// Routes for Menus
Route::get('/menus','MenuController@index');
Route::get('/add/menu','MenuController@create');
Route::post('/store/menu','MenuController@store');
Route::get('/edit/menu/{id?}','MenuController@edit');
Route::post('/save/menu','MenuController@save');
Route::get('/delete/menu/{id?}','MenuController@delete');


// Routes for Articles
Route::get('/articles','ArticleController@index');
Route::get('/add/article','ArticleController@create');
Route::post('/store/article','ArticleController@store');
Route::get('/edit/article/{id?}','ArticleController@edit');
Route::post('/save/article','ArticleController@save');
Route::get('/delete/article/{id?}','ArticleController@delete');

//Routes for All Articles page wise
Route::get('/all-articles/{pageName?}/{menuId?}','IndexController@loadArticles');

//Route for single Article
Route::get('/{link?}','IndexController@singleArticle');


