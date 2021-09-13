<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\InfoController;
use App\Http\Controllers\ControllersInfo;

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
    return view('main.index');
});

// Route::get('/info1', function () {
//     return view('sections.news.info1');
// });

Route::get('/info-one', [ControllersInfo::class, 'index']);