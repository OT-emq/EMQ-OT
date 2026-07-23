<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Diario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-cover bg-center bg-no-repeat"
    style="background-image: url('/images/background.png')">

@include('partials.header')

<div class="max-w-7xl mx-auto mt-8">

    <h1
        class="bg-blue-500 text-white text-4xl rounded-lg p-4 text-center font-bold border border-black mb-8">

        Plan Diario

    </h1>

    <div class="bg-white rounded-xl shadow-xl p-8">

        <form>

            <div class="grid grid-cols-2 gap-6">

                <div>

                    <label class="font-bold">
                        Fecha
                    </label>

                    <input
                        type="date"
                        class="w-full border rounded-lg p-3 mt-2">

                </div>

                <div>

                    <label class="font-bold">
                        Barrio / Sector
                    </label>

                    <input
                        type="text"
                        class="w-full border rounded-lg p-3 mt-2">

                </div>

                <div>

                    <label class="font-bold">
                        Dirección
                    </label>

                    <input
                        type="text"
                        class="w-full border rounded-lg p-3 mt-2">

                </div>

                <div>

                    <label class="font-bold">
                        Actividad
                    </label>

                    <select
                        class="w-full border rounded-lg p-3 mt-2">

                        <option>
                            Seleccione...
                        </option>

                    </select>

                </div>

                <div>

                    <label class="font-bold">
                        Trabajador Responsable
                    </label>

                    <select
                        class="w-full border rounded-lg p-3 mt-2">

                        <option>
                            Seleccione...
                        </option>

                    </select>

                </div>

                <div>

                    <label class="font-bold">
                        Prioridad
                    </label>

                    <select
                        class="w-full border rounded-lg p-3 mt-2">

                        <option>Alta</option>
                        <option>Media</option>
                        <option>Baja</option>

                    </select>

                </div>

            </div>

            <div class="mt-6">

                <label class="font-bold">

                    Observaciones

                </label>

                <textarea
                    rows="5"
                    class="w-full border rounded-lg p-3 mt-2"></textarea>

            </div>

            <div class="flex justify-end mt-8">

                <button
                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg">

                    Agregar al Plan

                </button>

            </div>

        </form>

    </div>

    <div class="bg-white rounded-xl shadow-xl mt-10 overflow-hidden">

        <table class="w-full">

            <thead class="bg-blue-500 text-white">

                <tr>

                    <th class="border p-3">Fecha</th>

                    <th class="border p-3">Barrio</th>

                    <th class="border p-3">Dirección</th>

                    <th class="border p-3">Actividad</th>

                    <th class="border p-3">Responsable</th>

                    <th class="border p-3">Acciones</th>

                </tr>

            </thead>

            <tbody>

                <tr class="text-center hover:bg-gray-100">

                    <td class="border p-3">08/07/2026</td>

                    <td class="border p-3">Centro</td>

                    <td class="border p-3">Calle 10 #5-20</td>

                    <td class="border p-3">Reparación de fuga</td>

                    <td class="border p-3">Juan Pérez</td>

                    <td class="border p-3">

                        <button
                            class="bg-red-600 text-white px-4 py-2 rounded">

                            Eliminar

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

    <div class="flex justify-end mt-8">

        <a
            href=""
            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg">

            Generar Orden de Trabajo

        </a>

    </div>

</div>

</body>

</html>