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

Route::get('/', function () {
    return view('loginRole');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/student/home','StudentController@index');
Route::get('/student','StudentCaegoriesController@index');
Route::get('/student/{id}','StudentCaegoriesController@showvocab');
Route::get('/vocabularies/{id}','VocabulariesController@show');




Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');


//    Route::get('/categories/create','AdminController@categoriesCreate');
    Route::get('/categories/create','CategoriesController@create');
    Route::post('/categories/store','CategoriesController@store')->name('admin.store.submit');
    Route::get('/categories/create','CategoriesController@create');
    Route::get('/categories/{id}','CategoriesController@show');
    Route::get('/categories/{id}/edit','CategoriesController@edit');
    Route::put('/categories/{id}','CategoriesController@update');
    Route::delete('/categories/{id}','CategoriesController@destroy');

    Route::get('/vocabularies/create/{id}','VocabulariesController@create');
    Route::post('/vocabularies/store','VocabulariesController@store');
    Route::get('/vocabularies/{id}','VocabulariesController@show');
    Route::put('/vocabularies/{category_id}','VocabulariesController@update');
    Route::get('/vocabularies/{id}/edit','VocabulariesController@edit');
    Route::delete('/vocabularies/{id}','VocabulariesController@destroy');

//
//

});
