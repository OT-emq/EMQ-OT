@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto mt-10">

    <div class="flex justify-between items-center mb-6">

        <h1 class="bg-blue-500 text-white text-4xl rounded-lg px-6 py-3 border border-black font-bold">
            Nuevo Trabajador
        </h1>

        <a href="{{ route('trabajadores.index') }}"
            class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg border border-black font-bold">
            Volver
        </a>

    </div>

    @if ($errors->any())

        <div class="bg-red-100 border border-red-500 text-red-700 rounded p-4 mb-6">

            <ul class="list-disc ml-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form action="{{ route('trabajadores.store') }}" method="POST"
        class="bg-white shadow-lg rounded-lg p-8">

        @csrf

        <div class="mb-6">

            <label class="block font-bold mb-2">
                Nombre
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full border rounded p-3"
                required>

        </div>

        <div class="mb-6">

            <label class="block font-bold mb-2">
                Apellido
            </label>

            <input
                type="text"
                name="last_name"
                value="{{ old('last_name') }}"
                class="w-full border rounded p-3"
                required>

        </div>

        <div class="flex justify-end gap-3">

            <a href="{{ route('trabajadores.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded">
                Cancelar
            </a>

            <button
                type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded font-bold">

                Guardar Trabajador

            </button>

        </div>

    </form>

</div>

@endsection