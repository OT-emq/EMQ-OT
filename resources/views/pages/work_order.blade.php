@extends('layouts.app')

@section('content')
<table class="table-fixed border-collapse border border-black w-237.5">
<colgroup>

</colgroup>
    <tr class="h-fit">
        <td class="border border-black" colspan="3"> <img src="{{ asset('images/logo-emq.png') }}" class="h-9 mx-auto"> </td> 
        <td class="border border-black text-center text-[10px]" colspan="5"> <p>ACUEDUCTO</p>
        <p>ORDEN DE TRABAJO PARA ACTIVIDADES OPERATIVAS</p> </td>
        <td class="border border-black pl-1 text-[10px]"><p>Codigo:    FO.AC.02</p>
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
</table>
@endsection