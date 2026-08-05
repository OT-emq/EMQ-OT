@extends('layouts.app')

@section('content')
<div class="display block">
<table class="table-fixed border-collapse border border-black w-237.5 mx-auto">
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
        <td colspan="2" class="text-[10px] text-center">{{$ot->id}}</td>
        <td class="border border-black  text-[10px]">FECHA</td>
        <td class="border border-black text-[10px] text-center">{{ $ot->dailyPlane->date->format('d') }}</td>
        <td class="border border-black text-[10px] text-center" colspan="2">{{ $ot->dailyPlane->date->format('m') }}</td>
        <td class="border border-black text-[10px] text-center">{{ $ot->dailyPlane->date->format('Y') }}</td>
    </tr>

    <tr>
        <td class="border border-black text-[10px]" colspan="2">CODIGO DEL USUARIO</td>
        <td colspan="3" class="border border-black  text-[10px]">{{ $ot->dailyPlane->code }}</td>
        <td colspan="4" class="border border-black text-[10px]">NOMBRE DEL USUARIO</td>
    </tr>
    <tr class="h-15">
        <td colspan="6" class="text-[10px] align-top text-left">DIRECCION {{ $ot->dailyPlane->address }}</td>
        <td class="text-[10px] align-top text-left">TELEFONO</td>
    </tr>
    <tr class="h-9">
        <td colspan="9" class="border border-black text-[10px] align-top text-left">DESCRIPCION DE LA ACTIVIDAD: {{ $ot->dailyPlane->activity->description }}</td>
    </tr>
    <tr class="h-9">
        <td colspan="5" class="border border-black text-[10px] align-top text-left">EQUIPO UTILIZADO:</td>
        <td colspan="4" class="border border-black text-[10px] align-top text-left">HORAS DE UTILIZACION</td>
    </tr>
    <tr class="h-7">
        <td colspan="9" class="border border-black text-[10px] align-top text-left">FUNCIONARIOS RESPONSABLES: {{ $ot->dailyPlane->worker->name }} {{ $ot->dailyPlane->worker->last_name }}</td>
    </tr>
    <tr>
        <td class="border border-black text-[10px]" colspan="2">HORA DE INICIO</td>
        <td colspan="2" class="text-[10px] text-center"></td>
        <td class="border border-black  text-[10px]">HORA FINAL</td>
        <td colspan="2" class="border border-black text-[10px] text-center text-gray-500"></td>
        <td class="border border-black text-[10px] text-center">TOTAL HORAS</td>
        <td class="border border-black text-[10px] text-center text-gray-500"></td>
    </tr>
</table>

<table class="border-collapse border border-black w-237.5 mt-0.5 mx-auto">
    <tr class="h-1">
        <td class="border border-black text-[6px] text-center" colspan="8">MATERIALES UTILIZADOS</td>
    </tr>
    <tr>
        <td class="border border-black text-[6px] text-center">DESCRIPCION</td>
        <td class="border border-black text-[6px] text-center w-1">CANT</td>
        <td class="border border-black text-[6px] text-center">DESCRIPCION</td>
        <td class="border border-black text-[6px] text-center w-1">CANT</td>
        <td class="border border-black text-[6px] text-center">DESCRIPCION</td>
        <td class="border border-black text-[6px] text-center w-1">CANT</td>
        <td class="border border-black text-[6px] text-center">DESCRIPCION</td>
        <td class="border border-black text-[6px] text-center w-1">CANT</td>
     
    </tr>
    <tr>
        <td class="border border-black text-[6px]">ADAP AGROTUBO HEMBRA</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">TAPONES LISOS</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">MEDIDOR 3/4"</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">PF MACHOS</td>
        <td class="border"></td>
    </tr>
    <tr>
        <td class="border border-black text-[6px]">ADAP AGROTUBO MACHO</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">BUJES</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">MEDIDOR 2"</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">ADAPTADOR HEMBRA</td>
        <td class="border"></td>
    </tr>
    <tr>
        <td class="border border-black text-[6px]">UNIVERSAL AGROTUBO</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">PF UNIVERSAL</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">MEDIDOR 1"</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">ADAPTADOR MACHO</td>
        <td class="border"></td>
    </tr>
<tr>
        <td class="border border-black text-[6px]">HOJAS MATERIALES</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">TUBO</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">MEDIDOR DE 1/2"</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">CEMENTO</td>
        <td class="border"></td>
    </tr>
    <tr>
        <td class="border border-black text-[6px]">UNION 1/2 PVC</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">SOLDADURA</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">TAPONES ROSCADOS</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">TABLAS</td>
        <td class="border"></td>
    </tr>
    <tr>
        <td class="border border-black text-[6px]">TEFLON</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">CODOS 1/2</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">TAPONES GALVANIZADOS</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">PUNTILLAS</td>
        <td class="border"></td>
    </tr>
    <tr>
        <td class="border border-black text-[6px]">MANGUERA PF</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">DISPOSITIVOS</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">REGISTRO DE INCORPO</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">ALAMBRE</td>
        <td class="border"></td>
    </tr>
    <tr>
        <td class="border border-black text-[6px]">COLLARES</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">REGISTROS CORTES</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]">PF A PVC</td>
        <td class="border"></td>
        <td class="border border-black text-[6px]"></td>
        <td class="border"></td>
    </tr>
</table>

<table class="border-collapse border border-black w-237.5 mt-0.5 mx-auto">
<tr>
    <td class="border border-black text-[6px] text-center" colspan="6">ACTIVIDADES</td>
</tr>
<tr>
    <td class="border border-black text-[6px] text-center" colspan="6">AREA ACUEDUCTO</td>
</tr>
<tr class="">
    <td class="border border-black text-[6px] py-0.5">ARREGLO DE DAÑOS ACOMETIDA CONGLOMERADO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">INSTALACION ACOMETIDA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">VISITAS PARA DISPONIBILIDAD DE SERVICIO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px] py-0.5">ARREGLO DE DAÑOS ACOMETIDA EN VIA ASFALTO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">INSTALACION DE TUBERIA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">EMPALMES DE REDES DE ACUEDUCTO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px] py-0.5">ARREGLO DE DAÑOS EN VIA TIERRA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">CARGUE DE MATERIAL PARA COBERTURA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">REPARACION DE DAÑOS DE MEDIDOR</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px] py-0.5">ARREGLO DE DAÑOS ACOMETIDA EN VIA CONCRETO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">RETIRO DE ESCOMBROS</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">EFECTUAR PURGA DE REDES DE ACUEDUCTO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px] py-0.5">ARREGLO DE TUBERIA MADRE EN VIA ASFALTO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">ARREGLO DE TUBERIA MADRE EN CONGLOMERADO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">DETECCION DE FUGAS NOCTURNAS DE RTEDES DE ACUEDUCTO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px] py-0.5">ARREGLO DE TUBERIA MADRE EN VIA TIERRA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">REPOSICION DE ACOMETIDAS</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">OTRO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px] text-center" colspan="6">LABORES ADICIONALES</td>
</tr>
<tr>
    <td class="border border-black text-[6px]">ACOMPAÑANTE DE TOPOGRAFIA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">LAVADO DE TANQUES ALMACENAMIENTO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">LAVAR DESARENADO QUITAPEREZA</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px]">ALTIMETRIA RURAL</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">RELLENO DE HUECOS</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">LIMPIEZA DE BOCATOMA CAMBINDO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px]">ALTIMETRIA URBANA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">RECOGIDA DE ESCOMBROS</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">LIMPIEZA DE BOCATOMA QUITAPEREZA</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px]">PLANIMETRIA RURAL</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">CAJILLAS</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">LIMPIEZA DE BOCATOMA DE RIO MONDOMO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px]">PLANIMETRIA URBANA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">LAVAR DESARENADOR CAMBINDO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">OTRO</td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>
<tr>
    <td class="border border-black text-[6px]">TUBERIA QUITAPEREZA</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]">LAVAR DESARENADOR RIO MONDOMO</td>
    <td class="border border-black text-[6px] w-3"></td>
    <td class="border border-black text-[6px]"></td>
    <td class="border border-black text-[6px] w-3"></td>
</tr>

</table>

<table class="border-collapse border border-black w-237.5 mt-[1px] mx-auto">
<tr>
    <td class="border border-black text-[6px] align-top h-17">OBSERVACIONES {{ $ot->dailyPlane->observations }}</td>
</tr>
</table>
<div class="w-237.5 mx-auto flex mt-15 justify-between">
<p class="text-[6px] border-t w-59 text-center">FIRMA DEL FUNCIONARIO</p>
<P class="text-[6px] border-t w-59 text-center">FIRMA RESPONSABLE</P>
</div>
</div>
@endsection