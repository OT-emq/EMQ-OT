@extends('layouts.app')

@section('title', 'inicio')

@section('content')
    <div class="bg-sky-500  mx-auto text-center w-fit px-10 rounded-3xl py-10">
        <p class="text-white text-5xl font-bold">
            GESTIÓN PARA LA CREACIÓN DE PLANILLAS
        </p>

        <p class="text-white text-4xl font-bold">
            (OTS)
        </p>
        <a href="{{ route('plan-diario.create') }}"
            class="flex items-center justify-center gap-3 w-fit mx-auto mt-10 border bg-emerald-500 px-8 py-4 rounded-3xl hover:bg-emerald-700">
            <span class="text-white text-3xl font-bold">Crear planilla</span>
        </a>
    </div>
    <div class="mx-auto mt-10 w-fit">
        <div class="rounded-t-3xl px-10 bg-sky-500 text-center text-white text-3xl font-bold">
            PANEL DE INFORMACIÓN
        </div>
        <div class="flex rounded-b-3xl items-center justify-center gap-20 bg-gray-300 py-10 px-10">
            <div class="w-fit text-center">
                <div class="flex gap-3 rounded-t-3xl bg-emerald-500 text-2xl text-white font-bold px-4">
                    Planes Diarios
                </div>
                <div class=" flex items-center justify-center py-2 gap-5 rounded-b-3xl  bg-white text-center">
                    {{ $dp }}
                </div>
            </div>
            <div class="w-fit text-center">
                <div class="rounded-t-3xl bg-emerald-500 text-2xl text-white text-center font-bold px-4">
                    OTS
                </div>
                <div class="flex items-center justify-center py-2 gap-5 rounded-b-3xl bg-white text-center">
                    {{ $wk }}
                </div>
            </div>
            <div class="w-fit text-center">
                <div class="flex gap-3 rounded-t-3xl bg-emerald-500 text-2xl text-white font-bold px-4">
                    Actividades
                </div>
                <div class=" flex items-center justify-center py-2 gap-5 rounded-b-3xl  bg-white text-center">
                    {{ $act }}
                </div>
            </div>
            <div class="w-fit text-center">
                <div class="flex gap-3 rounded-t-3xl bg-emerald-500 text-2xl text-white font-bold px-4">
                    <span>Trabajadores</span>
                </div>
                <div class=" flex items-center justify-center py-2 gap-5 rounded-b-3xl  bg-white text-center">
                    {{ $wko }}
                </div>
            </div>
        </div>
    </div>
@endsection
