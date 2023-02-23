<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

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

// Route::get('/', function () {
//     $series = config('db.series');
//     $links = config('db.links');
//     return view('home', compact('series', 'links'));
// });

Route::get('/', [ComicController::class, 'index'])->name('home');

Route::get('/infocomics/{param}', function ($param) {
    $series = config('db.series');
    $links = config('db.links');
    $single_comic = $series[$param];
    return view('infocomics', compact('single_comic', 'links'));
})->name('single');
