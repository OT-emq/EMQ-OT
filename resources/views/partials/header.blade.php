    <div class="bg-[#8DC2FF] flex p-1 relative z-20">
        <img class="h-20 self-center" src="{{ asset('images/logo-emq.png') }}" alt="Logo">
        <h1 class="font-bold text-white text-[20px] mx-auto self-center">GENERACION PARA ORDEN DE TRABAJO (OT)</h3>
    </div>
 
    <div class="flex mx-auto max-w-200 opacity-100 relative z-20">
       
       <a href="{{ route('index') }}" class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center">Inicio</a>
        <a href="{{ route('trabajadores.index') }}" class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center">Trabajadores</a>
       <a href="{{ route('plan.index') }}" class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center">Plan diario</a>
       <a href="{{ route('actividades.index') }}" class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold cursor-pointer text-center">Actividades</a>
       
    </div>