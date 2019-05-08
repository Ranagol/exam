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
    return view('welcome');
});

Route::get('/startprofessor', function () {
    return view('startprofessor');
});

Route::get('/startstudent', function () {
    return view('startstudent');
});

Route::delete('/deleteanswers', 'AnswersController@destroy');

Route::delete('/deletequestions', 'QuestionsController@destroy');

Route::resource('questions', 'QuestionsController');

Route::resource('answers', 'AnswersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
