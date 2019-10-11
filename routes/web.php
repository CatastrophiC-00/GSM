#<?php

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



Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout');

Route::middleware('auth')->group(function() {
	Route::get('/home', 'EnrolController@index');
	Route::get('/home/subjects', 'EnrolController@subject');
	Route::get('/home/sections', 'SectionsController@section');
	Route::get('/home/teachers', 'TeachersController@teacher');
	Route::get('/home/strands', 'StrandsController@strand');
	Route::get('/home/subjectstrands', 'SubjectStrandsController@subjectstrand');
	Route::get('/home/subjects/add', 'EnrolController@create');
	Route::get('/home/subjectstrands/add', 'SubjectStrandsController@create');
	Route::get('/home/sections/add', 'SectionsController@create');
	Route::get('/home/teachers/add', 'TeachersController@create');
	Route::get('/home/sections/{section}/edit', 'SectionsController@edit');
	Route::post('/home/sections/{section}/update', 'SectionsController@update');
	Route::post('/home/subjectstrands/{subjectstrand}/update', 'SubjectStrandsController@update');
	Route::get('/home/strands/{strand}/edit', 'StrandsController@edit');
	Route::get('/home/subjectstrands/{subjectstrand}/edit', 'SubjectStrandsController@edit');
	Route::post('/home/strands/{strand}/update', 'StrandsController@update');
	Route::get('/home/subjects/{subject}/edit', 'EnrolController@edit');
	Route::post('/home/subjects/{subject}/update', 'EnrolController@update');
	Route::get('/home/teachers/{teacher}/edit', 'TeachersController@edit');
	Route::post('/home/teachers/{teacher}/update', 'TeachersController@update');
	Route::get('/home/strands/add', 'StrandsController@create');
	Route::post('/home/subjects/store', 'EnrolController@store');
	Route::post('/home/sections/store', 'SectionsController@store');
	Route::post('/home/teachers/store', 'TeachersController@store');
	Route::post('/home/strands/store', 'StrandsController@store');
	Route::post('/home/subjectstrands/store', 'SubjectStrandsController@store');
});