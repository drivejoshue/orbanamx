@extends('layouts.public_tw')

@section('title', 'Orbana — Despacho inteligente para taxis')
@section('meta_description', 'Orbana centraliza tu operación: despacho en tiempo real, apps Driver y Passenger, monitoreo y reportes para tu flotilla.')




@section('content')

{{-- Hero --}}
<section
  id="inicio"
  class="relative md:h-screen md:py-0 py-28 items-center overflow-hidden bg-primary bg-center bg-no-repeat bg-cover"
  style="background-image:url('{{ asset('images/placeholder_map.png') }}');"
>
  <div class="container relative">
    <div class="grid grid-cols-1 md:mt-36 mt-10 text-center">

      <h1 class="wow animate__animated animate__fadeInDown font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5"
          data-wow-duration="0.8s" data-wow-offset="60">
        Sistema de despacho inteligente Cloud<br>
        <span class="text-white/90">para tu central y tu flotilla</span>
      </h1>

      <p class="wow animate__animated animate__fadeInUp text-white/75 text-lg max-w-2xl mx-auto"
         data-wow-delay="0.15s" data-wow-duration="0.8s" data-wow-offset="60">
        Operación en tiempo real: asignación por olas, monitoreo de conductores, App de conductor,
        seguridad, transparencia y reportes listos para crecer.
      </p>
       <div class="mt-6">
                                <a href="contact-one.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700 rounded-md me-2 mt-2"><i class="uil uil-location-point"></i> Probar TRIAL 14 dias Gratis</a>
                            </div>

      <div class="overflow-hidden mt-10 wow animate__animated animate__zoomIn"
           data-wow-delay="0.25s" data-wow-duration="0.9s" data-wow-offset="80">
        <img
          src="{{ asset('images/placeholder-map.png') }}"
          alt="Orbana Dispatch"
          class="mx-auto rounded-2xl shadow-lg border border-white/10 max-w-[1100px] w-full"
          loading="lazy"
        >
      </div>


      {{-- Detalles animados (CSS) --}}
      <div class="overflow-hidden after:content-[''] after:absolute after:h-14 after:w-14 after:bg-white/20 after:-top-[40px] after:start-[30%] after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>
      <div class="overflow-hidden after:content-[''] after:absolute after:h-10 after:w-10 after:bg-white/20 after:top-[30%] after:end-[20%] after:rounded-full after:animate-ping"></div>
    </div>
  </div>
</section>


{{-- Características --}}
<section id="caracteristicas" class="relative md:py-24 py-16 overflow-hidden">
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center">
      <h2 class="wow animate__animated animate__fadeInUp mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold"
          data-wow-duration="0.8s" data-wow-offset="60">
        ¿Qué resuelve Orbana?
      </h2>
      <p class="wow animate__animated animate__fadeInUp text-slate-400 max-w-2xl mx-auto"
         data-wow-delay="0.1s" data-wow-duration="0.8s" data-wow-offset="60">
        Diseñado para centrales reales: menos fricción operativa, más control, asignación transparente y datos accionables.
      </p>
    </div>

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
      {{-- Card 1 --}}
      <div class="wow animate__animated animate__fadeInUp group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center"
           data-wow-delay="0.05s" data-wow-duration="0.8s" data-wow-offset="60">
        <div class="relative overflow-hidden text-transparent -m-3">
          <i data-feather="hexagon" class="size-28 fill-primary/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
          <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-primary dark:text-white text-3xl flex justify-center items-center">
            <i class="uil uil-map-marker"></i>
          </div>
        </div>
        <div class="mt-6">
          <div class="text-xl font-medium">Tiempo real</div>
          <p class="text-slate-400 mt-3">Ubicación, estado, rutas sugeridas y eventos en vivo con Realtime (Reverb/Pusher).</p>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="wow animate__animated animate__fadeInUp group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center md:mt-16"
           data-wow-delay="0.12s" data-wow-duration="0.8s" data-wow-offset="60">
        <div class="relative overflow-hidden text-transparent -m-3">
          <i data-feather="hexagon" class="size-28 fill-primary/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
          <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-primary dark:text-white text-3xl flex justify-center items-center">
            <i class="uil uil-exchange"></i>
          </div>
        </div>
        <div class="mt-6">
          <div class="text-xl font-medium">Despacho inteligente</div>
          <p class="text-slate-400 mt-3">Olas de ofertas, prioridad por bases, radio, frescura y control operativo.</p>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="wow animate__animated animate__fadeInUp group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center"
           data-wow-delay="0.18s" data-wow-duration="0.8s" data-wow-offset="60">
        <div class="relative overflow-hidden text-transparent -m-3">
          <i data-feather="hexagon" class="size-28 fill-primary/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
          <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-primary dark:text-white text-3xl flex justify-center items-center">
            <i class="uil uil-shield-check"></i>
          </div>
        </div>
        <div class="mt-6">
          <div class="text-xl font-medium">Seguridad</div>
          <p class="text-slate-400 mt-3">Trazabilidad, auditoría por eventos y control por tenant/roles.</p>
        </div>
      </div>

      {{-- Card 4 --}}
      <div class="wow animate__animated animate__fadeInUp group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center md:mt-16"
           data-wow-delay="0.24s" data-wow-duration="0.8s" data-wow-offset="60">
        <div class="relative overflow-hidden text-transparent -m-3">
          <i data-feather="hexagon" class="size-28 fill-primary/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
          <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-primary dark:text-white text-3xl flex justify-center items-center">
            <i class="uil uil-chart-line"></i>
          </div>
        </div>
        <div class="mt-6">
          <div class="text-xl font-medium">Reportes</div>
          <p class="text-slate-400 mt-3">Ingresos, actividad, tiempos, zonas calientes y BI sobre el mapa.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Dashboard images --}}
<section id="apps" class="relative md:py-24 py-16">
  <div class="container relative">
{{-- Bloque 1: Dispatch (Operación en vivo) --}}
<div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
  <div class="relative wow animate__animated animate__fadeInLeft"
       data-wow-delay="0.1s" data-wow-duration="0.9s" data-wow-offset="90">
    <img src="{{ asset('images/dis45.png') }}"
         class="rounded-lg shadow-md dark:shadow-gray-800"
         alt="Panel Dispatch Orbana — Operación en vivo"
         loading="lazy">
    <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-0 start-0 rotate-45 -z-1 rounded-3xl"></div>
  </div>

  <div class="lg:ms-8 wow animate__animated animate__fadeInRight"
       data-wow-delay="0.15s" data-wow-duration="0.9s" data-wow-offset="90">
    <h4 class="mb-4 text-2xl leading-normal font-medium">
      Operación en tiempo real: <br> despacho inteligente sin perder control
    </h4>

    <p class="text-slate-400">
      Ve tu flotilla en un mapa vivo, monitorea estados y gestiona servicios con reglas claras.
      Orbana sugiere y prioriza conductores, pero la central mantiene el control: todo queda registrado y es auditable.
    </p>

    <ul class="list-none text-slate-400 mt-4">
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        Mapa vivo: ubicación, rumbo, frescura de señal y estados (idle / ocupado / offline)
      </li>
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        Olas de ofertas: prioridad por bases, radio configurable y filtros operativos
      </li>
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        Bitácora por evento: quién asignó, cuándo, a qué unidad y con qué criterio
      </li>
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        Vista de viajes: activos, programados, finalizados y cancelados con trazabilidad
      </li>
    </ul>

    <div class="mt-4">
      <a href="#contacto"
         class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
        Ver cómo funciona <i class="uil uil-angle-right-b align-middle"></i>
      </a>
    </div>
  </div>
</div>

{{-- Bloque 2: Dispatch (Reportes + BI) --}}
<div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
  <div class="relative order-1 md:order-2 wow animate__animated animate__fadeInRight"
       data-wow-delay="0.1s" data-wow-duration="0.9s" data-wow-offset="90">
    <img src="{{ asset('images/disp3.png') }}"
         class="rounded-lg shadow-md dark:shadow-gray-800"
         alt="Orbana Dispatch — Reportes y BI en mapa"
         loading="lazy">
    <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 dark:bg-primary/20 bottom-0 end-0 rotate-45 -z-1 rounded-3xl"></div>
  </div>

  <div class="lg:me-8 order-2 md:order-1 wow animate__animated animate__fadeInLeft"
       data-wow-delay="0.15s" data-wow-duration="0.9s" data-wow-offset="90">
    <h4 class="mb-4 text-2xl leading-normal font-medium">
      Reportes y BI sobre el mapa: <br> mejora continua con datos reales
    </h4>

    <p class="text-slate-400">
      Convierte la operación diaria en indicadores claros: desempeño por taxi, tiempos de respuesta,
      demanda por zona y cobertura real. Ideal para optimizar bases, turnos, radios y reglas de asignación.
    </p>

    <ul class="list-none text-slate-400 mt-4">
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        KPIs operativos: atención, aceptación, cancelaciones y viajes por hora/turno
      </li>
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        BI en mapa: zonas calientes (heatmap), cobertura y comparativos por colonia/zona
      </li>
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        Productividad por unidad: horas activas, servicios realizados y rendimiento por periodo
      </li>
      <li class="mb-1 flex">
        <i class="uil uil-check-circle text-primary text-xl me-2"></i>
        Exportación: CSV/PDF para auditoría, contabilidad o reportes internos
      </li>
    </ul>

    <div class="mt-4">
      <a href="#reportes"
         class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
        Ver reportes <i class="uil uil-angle-right-b align-middle"></i>
      </a>
    </div>
  </div>
</div>




  </div>


</section>

<div class="container relative md:mt-24 mt-16">
  <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">

    <div class="relative wow animate__animated animate__fadeInLeft" data-wow-delay=".05s" data-wow-offset="70">
      <img src="{{ asset('images/app7350.png') }}" class="mx-auto rounded-xl shadow-md dark:shadow-gray-800" alt="App Driver Orbana" loading="lazy">
      <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-2/4 translate-y-2/4 start-0 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
    </div>

    <div class="lg:ms-8 wow animate__animated animate__fadeInRight" data-wow-delay=".12s" data-wow-offset="70">
      <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">
        App Driver: ofertas claras, ruta y estados correctos
      </h4>

      <p class="text-slate-400">
        La app del conductor está enfocada a operación taxi: menos llamadas, menos “¿quién va?”, y más control.
        Recibe ofertas, confirma, navega y reporta estatus; la central ve todo en tiempo real y queda registro por evento.
      </p>

      <ul class="list-none text-slate-400 mt-4">
        <li class="mb-1 flex">
          <i class="uil uil-check-circle text-primary text-xl me-2"></i>
          Ofertas con origen/destino, monto y tiempo límite (anti-duplicados)
        </li>
        <li class="mb-1 flex">
          <i class="uil uil-check-circle text-primary text-xl me-2"></i>
          Flujo completo: aceptado → llegó → abordó → en viaje → finalizado
        </li>
        <li class="mb-1 flex">
          <i class="uil uil-check-circle text-primary text-xl me-2"></i>
          Ubicación en tiempo real para monitoreo de central y seguridad de usuarios
        </li>
        <li class="mb-1 flex">
          <i class="uil uil-check-circle text-primary text-xl me-2"></i>
          Reglas por central (tenant): bases, radio, ventanas de oferta y políticas operativas
        </li>
      </ul>

      <div class="mt-4">
        <a href="{{ Route::has('public.app.driver') ? route('public.app.driver') : url('/app-driver') }}"
           class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
          Conocer más de App Driver <i class="uil uil-angle-right-b align-middle"></i>
        </a>
      </div>
    </div>

  </div><!--end grid-->
</div>


{{-- services --}}
<section id="servicios" class="container relative md:mt-24 mt-16">
  <div class="grid grid-cols-1 pb-8 items-end">
    <h3 class="wow animate__animated animate__fadeInUp mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold"
        data-wow-duration="0.8s" data-wow-offset="70">
      Servicios de Orbana para tu central de taxis
    </h3>
    <p class="wow animate__animated animate__fadeInUp text-slate-400 max-w-xl"
       data-wow-delay="0.10s" data-wow-duration="0.8s" data-wow-offset="70">
      Plataforma integral: despacho, apps, monitoreo y reportes. Diseñada para operación taxi (no delivery, no paquetería).
    </p>
  </div><!--end grid-->

  <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

    <!-- 1 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.05s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-map"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#caracteristicas" class="text-lg font-medium group-hover:text-white duration-500">Mapa en vivo</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Ubicación, rumbo, estado y frescura de señal por taxi. Visualiza coberturas, bases y zonas operativas.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 2 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.12s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-exchange"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#caracteristicas" class="text-lg font-medium group-hover:text-white duration-500">Despacho inteligente</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Olas de ofertas, prioridad por base, radios y filtros. Asignación transparente con bitácora por evento.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 3 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.19s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-mobile-android"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#apps" class="text-lg font-medium group-hover:text-white duration-500">App Driver</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Ofertas, navegación y estados del servicio (llegó, abordó, en viaje, finalizado). Ubicación en segundo plano.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 4 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.26s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-globe"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#modelo" class="text-lg font-medium group-hover:text-white duration-500">Orbana Global & White Label</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Despliegues App White Label para tu central
          (tu marca, tus reglas, tus conductores) con infraestructura y soporte incluidos.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 5 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.33s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-shield-check"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#seguridad" class="text-lg font-medium group-hover:text-white duration-500">Seguridad y roles</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Control por central (multi-tenant), permisos por rol, trazabilidad y auditoría de asignaciones y cambios.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 6 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.40s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-chart-line"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#reportes" class="text-lg font-medium group-hover:text-white duration-500">Reportes operativos</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Ingresos y actividad por taxi/turno, tiempos de atención, cancelaciones y desempeño. Exportación a CSV/PDF.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 7 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.47s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-map-marker-question"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#mapa-bi" class="text-lg font-medium group-hover:text-white duration-500">BI en mapa</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Zonas calientes, cobertura, tiempos de respuesta por área y análisis visual para decisiones de operación.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 8 -->
    <div class="wow animate__animated animate__fadeInUp group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden"
         data-wow-delay="0.54s" data-wow-duration="0.85s" data-wow-offset="80">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        </svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-invoice"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#facturacion" class="text-lg font-medium group-hover:text-white duration-500">Plan y facturación</a>
        <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-3">
          Control de plan por vehículo y facturas de la central. Historial de cobros y estado de pagos.
        </p>
      </div>
    </div><!--end feature-->

  </div>
</section>


{{-- Wave separator --}}
<div class="relative">
  <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
    <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
  </div>
</div>






{{-- FAQ --}}
<section id="faq" class="py-16 border-t border-gray-100 dark:border-gray-800">
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center">
      <h2 class="wow animate__animated animate__fadeInUp mb-4 md:text-3xl text-2xl leading-normal font-semibold"
          data-wow-duration="0.8s" data-wow-offset="60">
        Preguntas frecuentes
      </h2>
      <p class="wow animate__animated animate__fadeInUp text-slate-400 max-w-xl mx-auto"
         data-wow-delay="0.1s" data-wow-duration="0.8s" data-wow-offset="60">
        Respuestas rápidas para centrales y flotillas.
      </p>
    </div>

    <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
      <div class="wow animate__animated animate__fadeInUp shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800"
           data-wow-delay="0.05s" data-wow-offset="70">
        <div class="font-semibold">¿Necesito internet estable en la base?</div>
        <p class="text-slate-400 mt-2">
          Sí. Orbana depende de tiempo real; con conexión estable el despacho es inmediato, visible en mapa y auditable.
        </p>
      </div>

      <div class="wow animate__animated animate__fadeInUp shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800"
           data-wow-delay="0.12s" data-wow-offset="70">
        <div class="font-semibold">¿Se puede operar por bases/paraderos?</div>
        <p class="text-slate-400 mt-2">
          Sí. Soporta colas por paradero y prioridad por base antes de buscar conductores cercanos, con reglas por central.
        </p>
      </div>

      <div class="wow animate__animated animate__fadeInUp shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800"
           data-wow-delay="0.19s" data-wow-offset="70">
        <div class="font-semibold">¿Por qué elegir Orbana?</div>
        <p class="text-slate-400 mt-2">
          Porque está diseñado para operación taxi: despacho por olas, control por bases, trazabilidad por evento y apps enfocadas en flujo real
          (aceptó, llegó, abordó, en viaje, finalizó). Menos improvisación, más control.
        </p>
      </div>

      <div class="wow animate__animated animate__fadeInUp shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800"
           data-wow-delay="0.26s" data-wow-offset="70">
        <div class="font-semibold">¿Qué beneficios económicos ofrece a largo plazo?</div>
        <p class="text-slate-400 mt-2">
          Reduce tiempos muertos y asignaciones “a ciegas”, mejora utilización por unidad, baja cancelaciones y permite medir desempeño.
          Con reportes por taxi/turno y control operativo, la central puede optimizar reglas y aumentar ingresos sostenibles.
        </p>
      </div>

      <div class="wow animate__animated animate__fadeInUp shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800"
           data-wow-delay="0.33s" data-wow-offset="70">
        <div class="font-semibold">Conectividad y alcance: ¿hasta dónde funciona?</div>
        <p class="text-slate-400 mt-2">
          Funciona donde haya datos móviles (4G/5G) y/o internet en la base. El sistema es cloud y multi-tenant: puedes operar por ciudad,
          ampliar cobertura por zonas y paraderos, y crecer por flotilla sin rehacer tu operación.
        </p>
      </div>

      <div class="wow animate__animated animate__fadeInUp shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800"
           data-wow-delay="0.40s" data-wow-offset="70">
        <div class="font-semibold">¿Cuál es la inversión mínima para iniciar?</div>
        <p class="text-slate-400 mt-2">
          Mínimo: un administrador en la base (PC o laptop con internet) y teléfonos Android para los conductores.
          Orbana incluye onboarding y configuración inicial para que empieces con lo esencial y escales conforme crece la flota.
        </p>
      </div>
    </div>
  </div>
</section>

<div class="container relative">
  <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px] wow animate__animated animate__fadeInUp"
       data-wow-delay=".1s" data-wow-duration="0.9s" data-wow-offset="90">

    <!-- Left -->
    <div class="lg:col-span-5">
      <div class="lg:text-start text-start">
        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
          Precio simple y transparente
        </h3>

        <p class="text-slate-400 max-w-xl">
          Un solo plan para operación taxi: despacho, apps, mapa en vivo, reportes y seguridad por central (multi-tenant).
          Sin costos ocultos. Ideal para crecer por vehículo.
        </p>

        <div class="mt-6 flex flex-wrap gap-3">
         

          <a href="#faq"
             class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-white/10 hover:bg-white/20 border-gray-200/30 text-slate-900 dark:text-white rounded-md">
            Ver preguntas <i class="uil uil-angle-right-b align-middle"></i>
          </a>
        </div>

        <p class="text-slate-400 mt-4 text-sm">
          Precio base: <b class="text-slate-900 dark:text-white">$299 MXN</b> por vehículo al mes.
          <span class="opacity-80">Precio especial para flotillas.</span>
        </p>
      </div>
    </div><!--end col-->

    <!-- Right -->
    <div class="lg:col-span-7 mt-8 lg:mt-0">
      <div class="lg:ms-8">
        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-0 gap-[30px]">

          <!-- Card 1 -->
          <div class="group border-b-[3px] border-gray-200 dark:border-gray-700 relative shadow-sm dark:shadow-gray-800 rounded-md md:scale-110 z-3 bg-white dark:bg-slate-900 wow animate__animated animate__fadeInUp"
               data-wow-delay=".3s" data-wow-duration="0.9s" data-wow-offset="90">
            <div class="p-6 py-8">
              <h6 class="font-bold uppercase mb-5 text-primary">Plan Orbana</h6>

              <div class="flex mb-2 items-end gap-1">
                <span class="text-xl font-semibold">$</span>
                <span class="price text-4xl font-semibold mb-0">299</span>
                <span class="text-xl font-semibold self-end mb-1">MXN</span>
                <span class="text-sm text-slate-400 ms-2 mb-1">/ vehículo / mes</span>
              </div>

              <p class="text-slate-400 mb-5">
                Todo lo necesario para una central: mapa vivo, despacho, control por rol, bitácora y reportes.
              </p>

              <ul class="list-none text-slate-400">
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Panel Dispatch + mapa en tiempo real</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> App Driver (ofertas, estados, ubicación)</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Reportes operativos (CSV/PDF)</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Seguridad por roles y auditoría</li>
              </ul>

              <a href="#contacto"
                 class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-5">
                Empezar
              </a>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="group border-b-[3px] border-gray-200 dark:border-gray-700 relative shadow-sm dark:shadow-gray-800 rounded-md z-2 bg-gray-50 dark:bg-slate-800 wow animate__animated animate__fadeInUp"
               data-wow-delay=".5s" data-wow-duration="0.9s" data-wow-offset="90">
            <div class="p-6 py-8 md:ps-10">
              <h6 class="font-bold uppercase mb-5 text-primary">$ Flotillas y crecimiento</h6>

              <div class="flex mb-2 items-end gap-1">
                <span class="text-xl font-semibold"></span>
                <span class="price text-4xl font-semibold mb-0"></span>
                <span class="text-xl font-semibold self-end mb-1">Precio especial a flotillas</span>
                <span class="text-sm text-slate-400 ms-2 mb-1"></span>
              </div>

              <p class="text-slate-400 mb-5">
                Si tienes más unidades, ajustamos onboarding, soporte y reglas operativas para tu flujo real.
              </p>

              <ul class="list-none text-slate-400">
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Descuentos por volumen (precio especial)</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Configuración de bases/paraderos y radios</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> BI en mapa (zonas calientes y tiempos)</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Acompañamiento de puesta en marcha</li>
              </ul>

              <a href="#contacto"
                 class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-5">
                Cotizar flotilla
              </a>
            </div>
          </div>

        </div>
      </div>
    </div><!--end col-->
  </div><!--end grid-->
</div>

<!-- Separador (counters) -->
<section class="py-10 bg-primary">
  <div class="container relative">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

      <div class="counter-box relative text-start">
        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10 leading-none">
          <span class="counter-value" data-target="1">1</span>
        </h3>
        <div class="font-semibold text-lg text-white -mt-4">
          Plan simple
        </div>
        <p class="text-white/70 text-sm mt-1 mb-0">
          $299 MXN por vehículo/mes
        </p>
      </div>

      <div class="counter-box relative text-start">
        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10 leading-none">
          <span class="counter-value" data-target="24">24</span>/<span class="counter-value" data-target="7">7</span>
        </h3>
        <div class="font-semibold text-lg text-white -mt-4">
          Operación en vivo
        </div>
        <p class="text-white/70 text-sm mt-1 mb-0">
          Mapa, ofertas y estados
        </p>
      </div>

      <div class="counter-box relative text-start">
        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10 leading-none">
          <span class="counter-value" data-target="100">100</span>%
        </h3>
        <div class="font-semibold text-lg text-white -mt-4">
          Transparencia
        </div>
        <p class="text-white/70 text-sm mt-1 mb-0">
          Bitácora y auditoría por evento
        </p>
      </div>

      <div class="counter-box relative text-start">
        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10 leading-none">
          <span class="counter-value" data-target="0">0</span>
        </h3>
        <div class="font-semibold text-lg text-white -mt-4">
          Inversión en servidores
        </div>
        <p class="text-white/70 text-sm mt-1 mb-0">
          Nosotros operamos la nube
        </p>
      </div>

    </div><!--end grid-->
  </div><!--end container-->
</section>






<section class="relative md:py-24 py-16 overflow-hidden">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="lg:me-8">
                            <div class="relative">
                                <img src="images/app8350.png" alt="">
                                <div class="overflow-hidden absolute size-[512px] bg-primary/5 top-1/4 start-0 end-0 align-middle -z-1 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 md:col-span-6">
                        <div class="lg:ms-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800 p-6">
                                <h3 class="mb-6 text-2xl leading-normal font-medium">Envianos un mensaje!</h3>

              <form id="contactForm" class="mt-2">
  <!-- Honeypot anti-bots (oculto) -->
  <input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true">

  <p id="formMsg" class="mb-4 text-sm"></p>

  <div class="grid lg:grid-cols-12 lg:gap-6">

    <!-- Nombre -->
    <div class="lg:col-span-6 mb-5">
      <div class="text-start">
        <label class="font-semibold">Nombre</label>
        <div class="form-icon relative mt-2">
          <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
          <input
            name="contact_name"
            type="text"
            required
            class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0"
            placeholder="Tu nombre"
          >
        </div>
      </div>
    </div>

    <!-- Email -->
    <div class="lg:col-span-6 mb-5">
      <div class="text-start">
        <label class="font-semibold">Correo</label>
        <div class="form-icon relative mt-2">
          <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
          <input
            name="contact_email"
            type="email"
            required
            class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0"
            placeholder="correo@dominio.com"
          >
        </div>
      </div>
    </div>

    <!-- Teléfono -->
    <div class="lg:col-span-6 mb-5">
      <div class="text-start">
        <label class="font-semibold">Teléfono</label>
        <div class="form-icon relative mt-2">
          <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
          <input
            name="contact_phone"
            type="text"
            inputmode="tel"
            class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0"
            placeholder="Ej. 2291234567"
          >
        </div>
      </div>
    </div>

    <!-- Central -->
    <div class="lg:col-span-6 mb-5">
      <div class="text-start">
        <label class="font-semibold">Nombre de la central</label>
        <div class="form-icon relative mt-2">
          <i data-feather="briefcase" class="size-4 absolute top-3 start-4"></i>
          <input
            name="central_name"
            type="text"
            class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0"
            placeholder="Ej. Radio Taxi Centro"
          >
        </div>
      </div>
    </div>

    <!-- Ciudad -->
    <div class="lg:col-span-6 mb-5">
      <div class="text-start">
        <label class="font-semibold">Ciudad</label>
        <div class="form-icon relative mt-2">
          <i data-feather="map-pin" class="size-4 absolute top-3 start-4"></i>
          <input
            name="city"
            type="text"
            class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0"
            placeholder="Ej. Puebla"
          >
        </div>
      </div>
    </div>

    <!-- Estado -->
    <div class="lg:col-span-6 mb-5">
      <div class="text-start">
        <label class="font-semibold">Estado</label>
        <div class="form-icon relative mt-2">
          <i data-feather="flag" class="size-4 absolute top-3 start-4"></i>
          <input
            name="state"
            type="text"
            class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0"
            placeholder="Ej. Puebla"
          >
        </div>
      </div>
    </div>

  </div>

  <!-- Mensaje -->
  <div class="grid grid-cols-1">
    <div class="mb-5">
      <div class="text-start">
        <label class="font-semibold">Mensaje</label>
        <div class="form-icon relative mt-2">
          <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
          <textarea
            name="message"
            class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0"
            placeholder="Cuéntanos las necesidades de su central de taxi"
          ></textarea>
        </div>
      </div>
    </div>
  </div>

  <button
    type="submit"
    id="contactSubmit"
    class="py-2 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md justify-center flex items-center"
  >
    Enviar mensaje
  </button>
</form>


                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

      
        </section>

@endsection
<script>
(function () {
  const form = document.getElementById('contactForm');
  const msg  = document.getElementById('formMsg');
  const btn  = document.getElementById('contactSubmit');

  const API_URL = 'https://dispatch.orbana.mx/api/public/contact';
  const PUBLIC_KEY = 'TU_PUBLIC_CONTACT_KEY'; // ponlo del lado del landing (o por env/Vite si lo prefieres)

  function setMsg(text, kind) {
    msg.textContent = text || '';
    msg.className = 'mb-4 text-sm ' + (kind === 'ok'
      ? 'text-emerald-600'
      : kind === 'err'
        ? 'text-red-600'
        : 'text-slate-400');
  }

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    setMsg('Enviando…', 'info');
    btn.disabled = true;
    btn.classList.add('opacity-70', 'cursor-not-allowed');

    const fd = new FormData(form);
    const payload = Object.fromEntries(fd.entries());

    try {
      const res = await fetch(API_URL, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-PUBLIC-KEY': PUBLIC_KEY,
        },
        body: JSON.stringify(payload),
      });

      if (!res.ok) {
        let detail = '';
        try { detail = await res.text(); } catch (_) {}
        throw new Error(detail || ('HTTP ' + res.status));
      }

      setMsg('Listo. Te contactaremos pronto.', 'ok');
      form.reset();
      if (window.feather) window.feather.replace();

    } catch (err) {
      setMsg('No se pudo enviar. Intenta más tarde.', 'err');
      console.error(err);
    } finally {
      btn.disabled = false;
      btn.classList.remove('opacity-70', 'cursor-not-allowed');
    }
  });
})();
</script>

