@extends('layouts.app')

@section('content')
<table class="table-fixed border-collapse border border-black w-237.5">
<colgroup>

</colgroup>
    <tr class="h-fit">
        <td class="border border-black" colspan="3"> <img src="{{ asset('images/logo-emq.png') }}" class="h-9 mx-auto"> </td> 
        <td class="border border-black text-center text-[10px]" colspan="5"> <p>ACUEDUCTO</p>
        <p>ORDEN DE TRABAJO PARA ACTIVIDADES OPERATIVAS</p> </td>
        <td class="border border-black pl-1 text-[10px] w-50"><p>Codigo:    FO.AC.02</p>
        <p>Versión:    1.0</p>
        <p>Emisión:    15/09/2023</p></td>
    </tr>
    <tr>
        <td class="border border-black text-[10px]" colspan="2">ORDEN DE TRABAJO N°</td>
        <td colspan="2" class="text-[10px] text-center">{{-- {{ $workOrder->id }} --}}</td>
        <td class="border border-black  text-[10px]">FECHA</td>
        <td class="border border-black text-[10px] text-center text-gray-500">DD</td>
        <td class="border border-black text-[10px] text-center text-gray-500" colspan="2">MM</td>
        <td class="border border-black text-[10px] text-center text-gray-500">AAAA</td>
    </tr>
    <tr>
        <td class="border border-black text-[10px]" colspan="2">CODIGO DEL USUARIO</td>
        <td colspan="3" class="border border-black  text-[10px]"></td>
        <td colspan="4" class="border border-black text-[10px]">NOMBRE DEL USUARIO</td>
    </tr>
    <tr class="h-15">
        <td colspan="6" class="text-[10px] align-top text-left">DIRECCION</td>
        <td class="text-[10px] align-top text-left">TELEFONO</td>
    </tr>
    <tr class="h-9">
        <td colspan="9" class="border border-black text-[10px] align-top text-left">DESCRIPCION DE LA ACTIVIDAD:</td>
    </tr>
    <tr class="h-9">
        <td colspan="5" class="border border-black text-[10px] align-top text-left">EQUIPO UTILIZADO:</td>
        <td colspan="4" class="border border-black text-[10px] align-top text-left">HORAS DE UTILIZACION</td>
    </tr>
    <tr class="h-7">
        <td colspan="9" class="border border-black text-[10px] align-top text-left">FUNCIONARIOS RESPONSABLES:</td>
    </tr>
    <tr>
        <td class="border border-black text-[10px]" colspan="2">HORA DE INICIO</td>
        <td colspan="2" class="text-[10px] text-center">{{-- {{ $workOrder->id }} --}}</td>
        <td class="border border-black  text-[10px]">HORA FINAL</td>
        <td colspan="2" class="border border-black text-[10px] text-center text-gray-500"></td>
        <td class="border border-black text-[10px] text-center">TOTAL HORAS</td>
        <td class="border border-black text-[10px] text-center text-gray-500"></td>
    </tr>
</table>
@endsection