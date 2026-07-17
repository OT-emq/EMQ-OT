<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'layouts.app')->name('index');

Route::view('/trabajadores', 'pages.workers.index')->name('trabajadores.index');
Route::view('/actividades', 'pages.activities.index')->name('actividades.index');
Route::view('/plan-diario', 'pages.plan.index')->name('plan.index');
/* APRENDER A PROGRAMAR TE AYUDARA EN LA VIDA esto quien lo escribio watafa*/

