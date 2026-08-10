<div class="bg-gradient-to-r from-sky-500 to-emerald-500 flex p-1 relative z-20">
    <img class="h-20 self-center" src="{{ asset('images/icono.png') }}" alt="Logo">
    <h1 class="mx-auto text-[20px] font-bold text-white self-center"> GENERACION PARA ORDEN DE TRABAJO (OT)
    </h1>
</div>

<div class="flex mx-auto max-w-200 ">
    <x-buttom-nav title="Inicio" :route="route('index')" />
    <x-buttom-nav title="Plan Diario" :route="route('plan-diario.index')"/>
    <x-buttom-nav title="Actividades" :route="route('actividad.index')"/>
    <x-buttom-nav title="Trabajadores" :route="route('trabajadores.index')"/>
</div>
