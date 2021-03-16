<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PersonController;

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

// Route::get('hello', function() {
//     return view('hello.index');
// });

Route::get('hello',[HelloController::class, 'index']);
Route::post('hello',[HelloController::class, 'post']);
Route::get('person',[PersonController::class, 'index']);
Route::get('person/find',[PersonController::class, 'find']);
Route::post('person/find', [PersonController::class, 'search']);