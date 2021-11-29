<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrayController;
use App\Http\Controllers\ValidationController;

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
//Route::get('/posts', 'ArrayController@index')->name('post.index');


Route::get('/post', [ArrayController::class, 'index']);
Route::get('validation', [ValidationController::class, 'showform']);
Route::post('validation', [ValidationController::class, 'validateform']);
