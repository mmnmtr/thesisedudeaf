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
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');
Route::get('/student/home','StudentController@index');
Route::get('/student','StudentCaegoriesController@index');
Route::get('/student/{id}','StudentCaegoriesController@showvocab');
Route::get('/vocabularies/{id}','VocabulariesController@show');


Route::get('/sentences', 'VocabTestController@sentenceStudent');
Route::get('/sentence/play', 'VocabTestController@index');


Route::get('/sentences/subject', 'VocabTestController@createStep1');
Route::post('/sentences/subject', 'VocabTestController@postCreateStep1');

Route::get('/sentences/verb', 'VocabTestController@createStep2');
Route::post('/sentences/verb', 'VocabTestController@postCreateStep2');

Route::get('/sentences/object', 'VocabTestController@createStep3');
Route::post('/sentences/object', 'VocabTestController@postCreateStep3');

Route::get('/sentences/nextPlay', 'VocabTestController@createStep4');
Route::post('/sentences/play', 'VocabTestController@store');



Route::get('/exercises',function () {
  return view('exercise-student.exercisetypes');
});
Route::get('/exercises/type/1',function () {
  return view('exercise-student.exercisetypesexercise');
});
Route::get('/exercises/type/1/exercise',function () {
  return view('exercise-student.exercisetypesexercise_1');
});




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

    Route::get('/sentences', 'VocabTestController@backend');
    Route::get('/sentences/{id}','VocabTestController@backendShow');

//
//
    Route::get('/exercises','ExerciseController@index');
    Route::get('/exercises/create','ExerciseController@create');
    Route::post('/exercises/store','ExerciseController@store');

    Route::get('/exercises/create/{id}','ExerciseController@exerciceType1');
  Route::get('/exercises/create/{id}','ExerciseController@exerciceType2');


  Route::get('/students','StudentController@studentList');
  Route::get('/students/create','StudentController@create');
  Route::post('/students/store','StudentController@store');
  Route::get('/students/{id}','StudentController@show');
  Route::get('/students/{id}/edit','StudentController@edit');
  Route::put('/students/{id}','StudentController@update');
  Route::delete('/students/{id}','StudentController@destroy');




});
