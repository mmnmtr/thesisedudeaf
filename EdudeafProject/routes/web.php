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
Route::get('/exercises/type/1','ExerciseController@stdExcerT1');
Route::get('/exercises/type/2','ExerciseController@stdExcerT2');

Route::get('/exercises/type1/{id}','ExerciseController@stdExceshowType1');
Route::get('/exercises/type2/{id}','ExerciseController@stdExceshowType2');
Route::resource('/user-insert-choice','ExampleKKController@store');

Route::post('/exercises/scoreT1','ExerciseController@scoreT1');
Route::post('/exercises/scoreT2','ExerciseController@scoreT2');

Route::post('/user-insert-choice','ExampleKKController@store');







Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'CategoriesController@index')->name('admin.dashboard');


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
    Route::get('/exercises/{id}/{type}','ExerciseController@exerciseShow');
    Route::post('/exercises/store','ExerciseController@store');
    Route::get('/exercises/create/{id}/{type}','ExerciseController@exerciceType');
//  Route::get('/exercises/create/{id}','ExerciseController@exerciceType2');

     Route::post('/exercises/choices','ExerciseController@type1Choice');
  Route::post('/exercises/choicesT','ExerciseController@type2Choice');
  Route::delete('/exercises/{id}/delete','ExerciseController@destroy');
  Route::get('/exercisesScore/{id}','ExerciseController@exerciseStrScore');

  Route::get('/exerciseschoice/{id}/editT1','ExerciseChoicesController@editT1');
  Route::get('/exerciseschoice/{id}/editT2','ExerciseChoicesController@editT2');
  Route::put('/exerciseschoiceT1/{id}','ExerciseChoicesController@updateT1');
  Route::put('/exerciseschoiceT2/{id}','ExerciseChoicesController@updateT2');
  Route::delete('/exerciseschoice/{id}/deleteT1','ExerciseChoicesController@destroyT1');
  Route::delete('/exerciseschoice/{id}/deleteT2','ExerciseChoicesController@destroyT2');


  Route::get('/students','StudentController@studentList');
  Route::get('/students/create','StudentController@create');
  Route::post('/students/store','StudentController@store');
  Route::get('/students/{id}','StudentController@show');
  Route::get('/students/{id}/edit','StudentController@edit');
  Route::put('/students/{id}','StudentController@update');
  Route::delete('/students/{id}','StudentController@destroy');

  Route::get('/students/{id}/sentences','StudentController@showSentence');
  Route::get('/students/{id}/exercises','StudentController@showExercise');





});
