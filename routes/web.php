<?php

use App\Http\Controllers\Web\User\CreateUserController;
use App\Http\Controllers\Web\User\IndexUserController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Redirect::to('/users/index');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('index', IndexUserController::class)->name('users.index');
    Route::post('create', CreateUserController::class)->name('users.create');
});
