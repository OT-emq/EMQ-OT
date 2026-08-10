@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto mt-10">

    <div class="flex justify-between items-center mb-6">

        <h1 class="bg-blue-500 text-white text-4xl rounded-lg px-6 py-3 border border-black font-bold">
            Actividades
        </h1>

        <a href="{{ route('actividad.create') }}"
            class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg border border-black font-bold">
            + Agregar Actividad
        </a>

    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-500 text-green-700 p-3 rounded mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="border p-3">ID</th>
                    <th class="border p-3">Descripción</th>
                    <th class="w-fit border p-3">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @forelse($activities as $activity)

                    <tr class="hover:bg-gray-100">

                        <td class="border p-3 text-center">
                            {{ $activity->id }}
                        </td>

                        <td class="border p-3">
                            {{ $activity->description }}
                        </td>

                        <td class="border p-3">

                            <form action="{{ route('actividad.destroy', $activity) }}"
                                  method="POST"
                                  onsubmit="return confirm('¿Seguro que deseas eliminar esta actividad?');">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                                    Eliminar
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="3" class="border p-4 text-center text-gray-500">

                            No hay actividades registradas.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection