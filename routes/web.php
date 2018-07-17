<?php

use App\Articles;

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
    Articles::createIndex($shards = null, $replicas = null);

    Articles::putMapping($ignoreConflicts = true);

    Articles::addAllToIndex();

    return view('welcome');
});
