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
Route::get('/Student/count' ,  [App\Http\Controllers\StudentController::class, 'countByLevelsAndChapters'])->name('Student_count');
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


Route::get('/Asset/' ,  [App\Http\Controllers\AssetController::class, 'index'])->name('Asset_home');
Route::get('/Asset/create', [App\Http\Controllers\AssetController::class, 'create'])->name('Asset_create');
Route::get('/Asset/{id}' , [App\Http\Controllers\AssetController::class, 'getSingle'])->name('Asset_single');
Route::post('/Asset/new' , [App\Http\Controllers\AssetController::class, 'postNew'])->name('Asset_new.post');


Route::get('/AssetShortage/' ,  [App\Http\Controllers\AssetShortageController::class, 'index'])->name('AssetShortage_home');
Route::get('/AssetShortage/create', [App\Http\Controllers\AssetShortageController::class, 'create'])->name('AssetShortage_create');
Route::get('/AssetShortage/{id}' , [App\Http\Controllers\AssetShortageController::class, 'getSingle'])->name('AssetShortage_single');
Route::post('/AssetShortage/new' , [App\Http\Controllers\AssetShortageController::class, 'postNew'])->name('AssetShortage_new.post');


Route::get('/ChapterAsset/' ,  [App\Http\Controllers\ChapterAssetController::class, 'index'])->name('ChapterAsset_home');
Route::get('/ChapterAsset/create', [App\Http\Controllers\ChapterAssetController::class, 'create'])->name('ChapterAsset_create');
Route::get('/ChapterAsset/{id}' , [App\Http\Controllers\ChapterAssetController::class, 'getSingle'])->name('ChapterAsset_single');
Route::post('/ChapterAsset/new' , [App\Http\Controllers\ChapterAssetController::class, 'postNew'])->name('ChapterAsset_new.post');


Route::get('/AssetLocation/' ,  [App\Http\Controllers\AssetLocationController::class, 'index'])->name('AssetLocation_home');
Route::get('/AssetLocation/create', [App\Http\Controllers\AssetLocationController::class, 'create'])->name('AssetLocation_create');
Route::get('/AssetLocation/{id}' , [App\Http\Controllers\AssetLocationController::class, 'getSingle'])->name('AssetLocation_single');
Route::post('/AssetLocation/new' , [App\Http\Controllers\AssetLocationController::class, 'postNew'])->name('AssetLocation_new.post');


Route::get('/AssetLoan/' ,  [App\Http\Controllers\AssetLoanController::class, 'index'])->name('AssetLoan_home');
Route::get('/AssetLoan/create', [App\Http\Controllers\AssetLoanController::class, 'create'])->name('AssetLoan_create');
Route::get('/AssetLoan/{id}' , [App\Http\Controllers\AssetLoanController::class, 'getSingle'])->name('AssetLoan_single');
Route::post('/AssetLoan/new' , [App\Http\Controllers\AssetLoanController::class, 'postNew'])->name('AssetLoan_new.post');








