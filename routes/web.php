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

Route::get('hello', function () {
    return '
    <html>
    <body>
    <h1>Hello</h1>
    <p>これはサンプルページです</p>
    <p>今日はこれからlaravelの練習をしてきますので、よろしくお願い致します。</p>
    <input type="text" method="post" placeholder="ここに入力してね">
    <input type="checkbox">
    <input type="radio">
    <input type="password">
    <input type="submit" value="送信" >
    </body>
    </html>
    ';
});