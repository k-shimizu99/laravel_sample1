<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\PhotoController;
use App\Models\Sample;
use App\Http\Controllers\TextController;
use App\Http\Controllers\LectureController;


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


Route::get('/sample/index',[SampleController::class,'index'])->name('samples.index');
Route::get('/samples/create', [SampleController::class, 'create'])->name('samples.create');
Route::post('/samples/store', [ SampleController::class, 'store' ])->name('samples.store');

Route::get('/samples/{id}', [ SampleController::class, 'show'])->name('samples.show');
Route::get('/samples/{id}/edit', [ SampleController::class, 'edit'] )->name('samples.edit');
Route::post('/samples/{id}', [ SampleController::class, 'update' ])->name('samples.update');
Route::post('/samples/{id}/delete', [ SampleController::class, 'delete' ])->name('samples.delete');

Route::resource('photos', PhotoController::class);

Route::get('/texts/index',[TextController::class,'index'])->name('texts.index');
Route::get('/texts/create',[TextController::class,'create'])->name('texts.create');
Route::post('/texts/store',[TextController::class,'store'])->name('texts.store');

Route::get('texts/{id}', [TextController::class, 'show'])->name('texts.show');
Route::get('texts/{id}/edit', [TextController::class, 'edit'])->name('texts.edit');
Route::post('texts/{id}', [TextController::class, 'update'])->name('texts.update');
Route::post('texts/{id}/delete', [TextController::class, 'delete'])->name('texts.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('lectures/index', [LectureController::class, 'index'])->name('lectures.index');
    Route::post('lectures/index', [LectureController::class, 'store'])->name('lectures.store');
    Route::get('lectures/edit', [LectureController::class, 'edit'])->name('lectures.edit');
});


require __DIR__.'/auth.php';
