<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'layouts.app')->name('index');

Route::view('/trabajadores', 'pages.trabajadores.index')->name('trabajadores.index');
Route::view('/actividades','pages.actividades.index')->name('actividades.index');
Route::view('/plan-diario','pages.plan-diario.index')->name('plan.index');