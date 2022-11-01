<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

Route::get('/', [userController::class, 'lehome'])->name('lehome');
Route::get('/lehome', [userController::class, 'lehome'])->name('lehome');
Route::get('/setting', [userController::class, 'setting'])->name('setting');

Route::get('/add', [userController::class, 'add'])->name('add');
Route::post('/adding', [userController::class, 'adding'])->name('adding');

Route::get('/showdata/{id}', [userController::class, 'showdata'])->name('showdata');
Route::post('/updatedata/{id}', [userController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [userController::class, 'delete'])->name('delete');
