@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto mt-8">

    <h1 class="text-3xl font-bold bg-sky-500 text-white  text-center rounded p-4 mb-6">
        Nuevo Plan Diario
    </h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-500 p-4 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('plan-diario.store') }}" method="POST">

        @csrf

        <div class="grid grid-cols-2 gap-5">

            <div>
                <label class="font-bold">
                    Fecha
                </label>

                <input
                    type="date"
                    name="date"
                    value="{{ old('date') }}"
                    class="border w-full rounded p-2"
                    required>
            </div>

            <div>
                <label class="font-bold">
                    Código
                </label>

                <input
                    type="text"
                    name="code"
                    value="{{ old('code') }}"
                    class="border w-full rounded p-2"
                    required>
            </div>

        </div>

        <div class="mt-5">

            <label class="font-bold">
                Dirección
            </label>

            <input
                type="text"
                name="address"
                value="{{ old('address') }}"
                class="border w-full rounded p-2"
                required>

        </div>

        <div class="mt-5">

            <label class="font-bold">
                Actividad
            </label>

            <select
                name="activity_id"
                class="border w-full rounded p-2"
                required>

                <option value="">
                    Seleccione...
                </option>

                @foreach($activities as $activity)

                    <option
                        value="{{ $activity->id }}">

                        {{ $activity->description }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mt-5">

            <label class="font-bold">
                Trabajador
            </label>

            <select
                name="worker_id"
                class="border w-full rounded p-2"
                required>

                <option value="">
                    Seleccione...
                </option>

                @foreach($workers as $worker)

                    <option
                        value="{{ $worker->id }}">

                        {{ $worker->name }} {{ $worker->last_name }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mt-5">

            <label class="font-bold">
                Observaciones
            </label>

            <textarea
                name="observations"
                rows="4"
                class="border w-full rounded p-2">{{ old('observations') }}</textarea>

        </div>

        <div class="mt-8 flex gap-3">

            <button
                class="bg-green-600 text-white px-8 py-3 rounded">

                Guardar

            </button>

            <a
                href="{{ route('plan-diario.index') }}"
                class="bg-gray-500 text-white px-8 py-3 rounded">

                Cancelar

            </a>

        </div>

    </form>

</div>

@endsection