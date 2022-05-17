<?php

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

Route::get('ex', function () {
    return view('welcome');
});

Route::get('/', function () {
    // $data = DB::table('data') ->get();
    return view('data');
}) -> name('list');

Route::get('add', function () {
    return view('add');
})->name('adding');

Route::get('edit', function () {
    return view('edit');
})->name('edition');

// Route::get('/', function () {
//     // $data = DB::table('data') ->get();

//     return view('data', ['data' => $data]);
// }) -> name('list');
