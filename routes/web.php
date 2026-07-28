<?php

use App\Models\DailyPlane;
use App\Http\Controllers\DailyPlaneController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::redirect('/', '/inicio');
Route::get('/inicio', [IndexController::class, 'index'])->name('index');

Route::get('/plan-diario', [DailyPlaneController::class, 'index'])->name('plan.index');
Route::view('/trabajadores', 'pages.workers.index')->name('workers.index');
Route::view('/actividades', 'pages.activities.index')->name('activities.index');
Route::view('/form-plan', 'pages.plan.form')->name('plan.form');
/* Route::view('/plan-diario', 'pages.plan.index')->name('plan.index'); */


Route::get('/prueba-relaciones', function () {
    return DailyPlane::with(['worker', 'activity'])->get();
});