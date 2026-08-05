<?php

use App\Models\DailyPlane;
use App\Http\Controllers\DailyPlaneController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActivityController;
use App\Models\Activity;
use App\Models\Worker;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::redirect('/', '/inicio');
Route::get('/inicio', [IndexController::class, 'index'])->name('index');

Route::resource('trabajadores', WorkerController::class);
Route::resource('actividad', ActivityController::class);
Route::resource('orden-de-trabajo', WorkOrderController::class);
Route::resource('plan-diario', DailyPlaneController::class);




/* Route::get('/plan-diario', [DailyPlaneController::class, 'index'])->name('plan.index');*/
/* Route::view('/trabajadores', 'pages.workers.index')->name('workers.index');
Route::view('/crear-trabajador', 'pages.workers.create')->name('workers.create');
Route::view('/editar-trabajador', 'pages.workers.edit')->name('workers.edit');
Route::view('/eliminar-trabajador', 'pages.workers.edit')->name('workers.edit');

Route::view('/actividades', 'pages.activities.index')->name('activities.index');
Route::view('/form-plan', 'pages.plan.form')->name('plan.form'); */
/* Route::view('/plan-diario', 'pages.plan.index')->name('plan.index'); */


Route::get('/prueba-relaciones', function () {
    return DailyPlane::with(['worker', 'activity', 'workOrders'])->get();
});

/* Route::view('/orden-de-trabajo', 'pages.work_order'); */
/* Route::get('orden-de-trabajo', [WorkOrderController::class, 'index'])->name('work.index'); */
