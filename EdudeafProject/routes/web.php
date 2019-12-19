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
//
//Route::get('my-notification/{type}', 'HomeController@myNotification');

Route::get('/','StudentController@index');

Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout')->name('logout');

//Route::get('/cate','CategoriesController@index');
Route::get('/categories','CategoriesController@index');
Route::get('/categories/create','CategoriesController@create');
Route::get('/categories/{id}','CategoriesController@show');
Route::get('/categories/{id}/edit','CategoriesController@edit');
Route::put('/categories/{id}','CategoriesController@update');
Route::post('/categories/store','CategoriesController@store');
Route::delete('/categories/{id}','CategoriesController@destroy');

Route::get('/vocabularies/create/{id}','VocabulariesController@create');
Route::post('/vocabularies/store','VocabulariesController@store');
Route::get('/vocabularies/{id}','VocabulariesController@show');
Route::put('/vocabularies/{category_id}','VocabulariesController@update');
Route::get('/vocabularies/{id}/edit','VocabulariesController@edit');
Route::delete('/vocabularies/{id}','VocabulariesController@destroy');

Route::get('/student','StudentCaegoriesController@index');
Route::get('/student/{id}','StudentCaegoriesController@showvocab');

route::get('/exercises',function () {
    return view('student-exercises.index');
}) ;

route::get('/user',function () {
    return view('welcome');
}) ;
route::get('/teacher/login',function () {
    return view('loginpages.teacherLogin');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
