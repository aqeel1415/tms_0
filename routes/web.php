<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/Chapter/' ,  [App\Http\Controllers\ChapterController::class, 'index'])->name('Chapter_home');
Route::get('/Chapter/{id}' , [App\Http\Controllers\ChapterController::class, 'getSingle'])->name('Chapter_single');
Route::get('/Chapter/new' , [App\Http\Controllers\ChapterController::class, 'getNew'])->name('Chapter_new.get');
Route::post('/Chapter/new' , [App\Http\Controllers\ChapterController::class, 'postNew'])->name('Chapter_new.post');

/*

Route::get('/Level/' , 'LevelController@index')->name('Level_home');
Route::get('/Level/{id}' , 'LevelController@getSingle')->name('Level_single');
Route::get('/Level/new' , 'LevelController@getNew')->name('Level_new.get');
Route::post('/Level/new' , 'LevelController@postNew')->name('Level_new.post');


Route::get('/Location/' , 'LocationController@index')->name('Location_home');
Route::get('/Location/{id}' , 'LocationController@getSingle')->name('Location_single');
Route::get('/Location/new' , 'LocationController@getNew')->name('Location_new.get');
Route::post('/Location/new' , 'LocationController@postNew')->name('Location_new.post');


Route::get('/Student/' , 'StudentController@index')->name('Student_home');
Route::get('/Student/{id}' , 'StudentController@getSingle')->name('Student_single');
Route::get('/Student/new' , 'StudentController@getNew')->name('Student_new.get');
Route::post('/Student/new' , 'StudentController@postNew')->name('Student_new.post');



Route::get('/Teacher/' , 'TeacherController@index')->name('Teacher_home');
Route::get('/Teacher/{id}' , 'TeacherController@getSingle')->name('Teacher_single');
Route::get('/Teacher/new' , 'TeacherController@getNew')->name('Teacher_new.get');
Route::post('/Teacher/new' , 'TeacherController@postNew')->name('Teacher_new.post');


Route::get('/Unit/' , 'UnitController@index')->name('Unit_home');
Route::get('/Unit/{id}' , 'UnitController@getSingle')->name('Unit_single');
Route::get('/Unit/new' , 'UnitController@getNew')->name('Unit_new.get');
Route::post('/Unit/new' , 'UnitController@postNew')->name('Unit_new.post');


Route::get('/Asset/' , 'AssetController@index')->name('Asset_home');
Route::get('/Asset/{id}' , 'AssetController@getSingle')->name('Asset_single');
Route::get('/Asset/new' , 'AssetController@getNew')->name('Asset_new.get');
Route::post('/Asset/new' , 'AssetController@postNew')->name('Asset_new.post');

*/
