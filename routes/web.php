<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
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


Route::get('/post', [ArrayController::class, 'index']);
Route::get('validation', [ValidationController::class, 'showform']);
Route::post('validation', [ValidationController::class, 'validateform']);
Route::get('/car', [CarController::class, 'car']);


Route::get('/cache_set', function () {
    Cache::put('cachekey', 'I am in the cache!', 60);
});

Route::get('/cache_get', function () {
    return Cache::get('cachekey', 'default value');
});

Route::get('/collect1', [CollectionController::class, 'collection_class']);
Route::get('/collect2', [CollectionController::class, 'collect_method']);
Route::get('/src_collection', [CollectionController::class, 'search_data']);
Route::get('/filter_collection', [CollectionController::class, 'filter_data']);
Route::get('/sort_collection', [CollectionController::class, 'sort_data']);
Route::get('key_collection', [CollectionController::class, 'read_keys']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/company/{id}', [ArrayController::class,'index']); //->name('company.index');
Route::get('/user/{id}', [ArrayController::class,'index']); //->name('user.index');
