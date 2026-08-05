<div class="bg-gradient-to-r from-sky-500 to-emerald-500 flex p-1 relative z-20">
    <img class="h-20 self-center" src="{{ asset('images/logo-emq.png') }}" alt="Logo">
    <h1 class="font-bold text-white text-[20px] mx-auto self-center">GENERACION PARA ORDEN DE TRABAJO (OT)</h1>
</div>
 
<div class="flex mx-auto max-w-200 ">       
    <a href="{{ route('index') }}" class="flex-1 m-3 text-white border border-black bg-emerald-500 rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center hover:bg-emerald-700">Inicio</a>
    <a href="{{ route('trabajadores.index') }}" class="flex-1 m-3 text-white border border-black bg-emerald-500 rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center hover:bg-emerald-700">Trabajadores</a>
    <a href="{{ route('plan-diario.index') }}" class="flex-1 m-3 text-white border border-black bg-emerald-500 rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center hover:bg-emerald-700">Plan diario</a>
    <a href="{{ route('actividad.index') }}" class="flex-1 m-3 text-white border border-black bg-emerald-500 rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center hover:bg-emerald-700">Actividades</a>
</div>