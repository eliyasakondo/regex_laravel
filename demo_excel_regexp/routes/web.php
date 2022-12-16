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

use App\HTTP\Controllers\UserConroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/file-import', [UserConroller::class, 'importView'])->name('import-view');
Route::post('import', [UserConroller::class, 'import'])->name('import');
Route::get('export-users', [UserConroller::class, 'exportUsers'])->name('export-users');
