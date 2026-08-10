@extends('layouts.app')

@section('title', 'inicio')

@section('content')

    <div class="mx-auto w-fit px-10 py-10  rounded-3xl bg-sky-500 text-center">
        <p class="text-5xl font-bold text-white">
            GESTIÓN PARA LA CREACIÓN DE PLANILLAS
        </p>

        <p class="text-4xl font-bold text-white">
            (OTS)
        </p>
        <a href="{{ route('plan-diario.create') }}"
            class="flex items-center justify-center px-8 py-4 gap-3 mx-auto mt-10 w-fit border rounded-3xl bg-emerald-500  hover:bg-emerald-700 hover:shadow-lg hover:shadow-slate-500 hover:-translate-y-1 transition">
            <span class="text-3xl font-bold text-white">Crear planilla</span>
        </a>
    </div>
    <div class="mx-auto mt-10 w-fit">
        <div class="px-10 rounded-t-3xl bg-sky-500 text-center text-3xl font-bold text-white">
            PANEL DE INFORMACIÓN
        </div>
        <div class="flex items-center justify-center px-10 py-10 gap-8 rounded-b-3xl bg-blue-50">
           <x-card-dashboard title="Planes diarios" :value="$dps"/>
           <x-card-dashboard title="Trabajadores" :value="$wks"/>
           <x-card-dashboard title="Actividades" :value="$acts"/>
           <x-card-dashboard title="OTS" :value="$wkos"/>
        </div>
    </div>
@endsection
