@extends('layouts.app')

@section('title', 'plan')

@section('content')
<form action="{{ route('plan-diario.index') }}" method="GET" class="flex gap-4 mb-6 mx-auto justify-center">

    <input
        type="text"
        name="code"
        placeholder="Buscar por código"
        value="{{ request('code') }}"
        class="border p-2 rounded">

    <input
        type="date"
        name="date"
        value="{{ request('date') }}"
        class="border p-2 rounded">

    <button class="bg-blue-500 text-white px-4 rounded">
        Buscar
    </button>

    <a href="{{ route('plan-diario.index') }}"
       class="bg-gray-500 text-white px-4 py-2 rounded">
        Limpiar
    </a>

</form>

    <form action="" class="">
        <table class=" border text-center  w-3/4 mx-auto">
            <tr>
                <td rowspan="2" colspan="2" class="p-10">
                    <img src="{{ asset('images/logo-emq.png') }}" alt="">
                </td>
                <td colspan="2" class=" border h-15">
                    ACUEDUCTO
                </td>
                <td rowspan="2" colspan="2" class=" border p-5">
                    Codigo FO.AC.1
                    <br>
                    Version 1.0
                    <br>
                    Emision 15/09/2023
                </td>
            </tr>
            <tr>
                <td colspan="2" class=" border pr-5 pl-5 h-15">
                    PLAN DIARIO DE TRABAJO
                </td>
            </tr>
            <tr>
                <td colspan="2" class=" border">
                    FECHA
                </td>
                <td colspan="2" class=" border">
                    {{$dps->first()->date ?? 'Sin fecha'}}
                </td>
                <td colspan="2" class=" border">
                    Día: {{ $dps->first()?->date->translatedFormat('l') }}
                </td>
            </tr>
            <tr>
                <td colspan="2" class=" border text-left">
                    <label for="inspector">INSPECTOR</label>
                </td>
                <td colspan="4">
                    <input type="date" id="inspector" class="w-full text-center">
                </td>
            </tr>
            <tr>
                <th class=" border pr-5 pl-5">#</th>
                <th class=" border pr-5 pl-5">Direccion</th>
                <th class=" border pr-5 pl-5">Código</th>
                <th class=" border pr-5 pl-5">Actividad</th>
                <th class=" border pr-5 pl-5">Personal</th>
                <th class=" border pr-5 pl-5">Observaciones</th>
            </tr>
            @for ($i=0; $i < 10;$i++)
                <tr class="h-16 cursor-pointer hover:bg-gray-100"
        ondblclick="window.location='{{ isset($dps[$i]) ? route('work_order.show', $dps[$i]->id) : '#' }}'">
                    <td class="border p-2">
                        {{$dps[$i]->id ?? ''}}
                    </td>
                    <td class="border">
                        {{$dps[$i]->address ?? ''}}
                    </td>
                    <td class="border w-50">
                        {{$dps[$i]->code ?? ''}}
                    </td>
                    <td class="border break-words">
                        {{$dps[$i]->activity->description ?? ''}}
                    </td>
                    <td class="border w-10 break-words">
                        {{$dps[$i]->worker->name ?? ''}}
                    </td>
                    <td class="border">
                        {{$dps[$i]->observations ?? ''}}
                    </td>
                </tr>
            @endfor
        </table>
    </form>
@endsection

@push('scripts')
    <script>
    </script>
@endpush
