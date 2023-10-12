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
    $title_doc = env('APP_NAME');
    $title = 'Home';

    $series = Config('comics');

    return view('homepage', compact('title_doc', 'title', 'series'));
})->name('homepage');