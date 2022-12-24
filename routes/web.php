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

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Questa la tratto come home!
Route::get('/', function () {

    // Metodo che ho utilizzato prima di imparare config()
    // require_once __DIR__ . '/../resources/data/comics.php';
    // require_once __DIR__ . '/../resources/data/icons.php';

    $comics = config('data.comics.comics');
    $icons = config('data.icons.icons');

    return view('comics', compact('comics', 'icons'));
})->name('comics');

Route::get('/dettaglio-fumetto/{id}', function ($id) {

    $comics = config('data.comics.comics');
    $comic_get = array_filter($comics, fn ($item) => $item['id'] == $id);
    $comic = $comic_get[array_key_first($comic_get)];

    return view('comic_detail', compact('comic'));
})->name('comic_detail');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
