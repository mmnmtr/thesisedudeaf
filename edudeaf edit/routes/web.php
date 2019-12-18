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

Route::get('/student-home','HomeController@index');


Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout')->name('logout');

//Route::get('/cate','CategoriesController@index');
Route::get('/categories','CategoriesController@index');
Route::get('/create/category','CategoriesController@create');
Route::get('/{id}/allvocabularies/{category_name}','CategoriesController@show');
Route::get('/categories/{id}/edit','CategoriesController@edit');
Route::put('/categories/{id}','CategoriesController@update');
Route::post('/categories/store','CategoriesController@store');
Route::delete('/categories/{id}','CategoriesController@destroy');

Route::get('/vocabularies/create/{id}','VocabulariesController@create');
Route::post('/vocabularies/store','VocabulariesController@store');
Route::get('/vocabularies/{id}','VocabulariesController@show');
Route::delete('/vocabularies/{id}','VocabulariesController@destroy');

Route::get('/student/','StudentCaegoriesController@index');
Route::get('/student/{id}','StudentCaegoriesController@showvocab');

Route::get('/exercises',function () {
    return view('student-exercises.index');
}) ;
Route::get('/',function () {
    return view('welcome');
}) ;
Route::get('/teacher/login',function () {
    return view('loginpages.teacherLogin');
}) ;

//Route::get('/student/home',function () {
//    return view('home');
//});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
