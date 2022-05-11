<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\PhotoController;
use App\Models\Sample;
use App\Http\Controllers\TextController;


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