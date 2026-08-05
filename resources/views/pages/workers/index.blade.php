@extends('layouts.app')
@section('content')

    <div class="max-w-6xl mx-auto mt-10">

        <div class="flex justify-between items-center mb-6">

            <h1
                class="bg-blue-500 text-white text-4xl rounded-lg px-6 py-3 border border-black font-bold">
                Trabajadores
            </h1>

            <a href="{{ route('workers.create') }}"
                class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg border border-black font-bold">
                + Agregar Trabajador
            </a>

        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <table class="w-full">

                <thead class="bg-blue-500 text-white">

                    <tr>

                        <th class="p-4 border">ID</th>
                        <th class="p-4 border">Nombre</th>
                        <th class="p-4 border">Apellido</th>
                        <th class="p-4 border">Acciones</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($workers as $worker)

                        <tr class="text-center hover:bg-gray-100">

                            <td class="border p-3">{{ $worker->id }}</td>
                            <td class="border p-3">{{ $worker->name }}</td>
                            <td class="border p-3">{{ $worker->last_name }}</td>

                            <td class="border p-3">

                                <div class="flex justify-center gap-2">

                                    <a href="{{ route('workers.edit', $worker->id) }}"
                                        class="bg-yellow-500 text-white px-4 py-2 rounded">
                                        Editar
                                    </a>

                                    <form action=""
                                        method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este trabajador?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 text-white px-4 py-2 rounded">
                                            Eliminar
                                        </button>
                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="border p-4 text-center text-gray-500">
                                No hay trabajadores registrados.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>
@endsection