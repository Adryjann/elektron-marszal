<?php

use App\Http\Controllers\PortController;
use App\Http\Controllers\RealizacjeNiemcyController;
use App\Models\RealizacjeNiemcy;
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

Route::get('/', [PortController::class, 'index'])->name('index');

Route::get('/admin', [PortController::class, 'admin'])->name('admin');

Route::POST('/admin/login', [PortController::class, 'login'])->name("loguj");

Route::get('admin/panel/logout', [PortController::class, 'logout'])->name("wyloguj");

Route::get('/admin/panel', [PortController::class, 'admin_panel'])->name("admin-index");

Route::get('/admin/panel/dodaj', [PortController::class, 'dodaj_realizacje'])->name("dodaj");

Route::post('/admin/panel/dodaj/zapisz', [PortController::class, 'store'])->name('store');

Route::get('/admin/panel/edytuj/{id}', [PortController::class, 'edit'])->name('edytuj');

Route::put('/admin/panel/update/{id}', [PortController::class, 'update'])->name('update');

Route::delete('/admin/panel/usun/{id}',[PortController::class, 'delete'] )->name("delete");

Route::get('/realizacje', [PortController::class, 'realizacje'] )->name('realizacje');


/*Trasy na niemcy */

Route::get('/elektron', [RealizacjeNiemcyController:: class, 'deutsch'] ) -> name('deutsch');

Route::get('/admin/niemcy/panel', [RealizacjeNiemcyController::class, 'admin_panel'])->name("admin-index-niemcy");

Route::get('/admin/niemcy/panel/dodaj', [RealizacjeNiemcyController::class, 'dodaj_realizacje'])->name("dodaj-niemcy");

Route::post('/admin/niemcy/panel/dodaj/zapisz', [RealizacjeNiemcyController::class, 'store'])->name("store-niemcy");

Route::get('/admin/niemcy/panel/edytuj/{id}', [RealizacjeNiemcyController::class, 'edit'])->name('edytuj-niemcy');

Route::put('/admin/niemcy/panel/update/{id}', [RealizacjeNiemcyController::class, 'update'])->name('update-niemcy');

Route::delete('/admin/niemcy/panel/usun/{id}',[RealizacjeNiemcyController::class, 'delete'] )->name("delete-niemcy");

Route::get('/niemcy/realizacje', [RealizacjeNiemcyController::class, 'realizacje'] )->name('realizacje-niemcy');












