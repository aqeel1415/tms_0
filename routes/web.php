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
Route::get('/Chapter/create', [App\Http\Controllers\ChapterController::class, 'create'])->name('Chapter_create');
Route::get('/Chapter/{id}' , [App\Http\Controllers\ChapterController::class, 'getSingle'])->name('Chapter_single');
Route::post('/Chapter/new' , [App\Http\Controllers\ChapterController::class, 'postNew'])->name('Chapter_new.post');



Route::get('/Level/' ,  [App\Http\Controllers\LevelController::class, 'index'])->name('Level_home');
Route::get('/Level/create', [App\Http\Controllers\LevelController::class, 'create'])->name('Level_create');
Route::get('/Level/{id}' , [App\Http\Controllers\LevelController::class, 'getSingle'])->name('Level_single');
Route::post('/Level/new' , [App\Http\Controllers\LevelController::class, 'postNew'])->name('Level_new.post');



Route::get('/Location/' ,  [App\Http\Controllers\LocationController::class, 'index'])->name('Location_home');
Route::get('/Location/create', [App\Http\Controllers\LocationController::class, 'create'])->name('Location_create');
Route::get('/Location/{id}' , [App\Http\Controllers\LocationController::class, 'getSingle'])->name('Location_single');
Route::post('/Location/new' , [App\Http\Controllers\LocationController::class, 'postNew'])->name('Location_new.post');



Route::get('/Student/' ,  [App\Http\Controllers\StudentController::class, 'index'])->name('Student_home');
Route::get('/Student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('Student_create');
Route::get('/Student/{id}' , [App\Http\Controllers\StudentController::class, 'getSingle'])->name('Student_single');
Route::post('/Student/new' , [App\Http\Controllers\StudentController::class, 'postNew'])->name('Student_new.post');


Route::get('/Teacher/' ,  [App\Http\Controllers\TeacherController::class, 'index'])->name('Teacher_home');
Route::get('/Teacher/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('Teacher_create');
Route::get('/Teacher/{id}' , [App\Http\Controllers\TeacherController::class, 'getSingle'])->name('Teacher_single');
Route::post('/Teacher/new' , [App\Http\Controllers\TeacherController::class, 'postNew'])->name('Teacher_new.post');


Route::get('/Unit/' ,  [App\Http\Controllers\UnitController::class, 'index'])->name('Unit_home');
Route::get('/Unit/create', [App\Http\Controllers\UnitController::class, 'create'])->name('Unit_create');
Route::get('/Unit/{id}' , [App\Http\Controllers\UnitController::class, 'getSingle'])->name('Unit_single');
Route::post('/Unit/new' , [App\Http\Controllers\UnitController::class, 'postNew'])->name('Unit_new.post');

/*
=======

>>>>>>> d0e45171ce6b45a21ba567139358d58b24a3960a
Route::get('/Tool/' ,  [App\Http\Controllers\ToolController::class, 'index'])->name('Tool_home');
Route::get('/Tool/create', [App\Http\Controllers\ToolController::class, 'create'])->name('Tool_create');
Route::get('/Tool/{id}' , [App\Http\Controllers\ToolController::class, 'getSingle'])->name('Tool_single');
Route::post('/Tool/new' , [App\Http\Controllers\ToolController::class, 'postNew'])->name('Tool_new.post');
<<<<<<< HEAD
*/

