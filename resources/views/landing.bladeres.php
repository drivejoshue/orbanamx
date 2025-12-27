@extends('layouts.public_tw')

@section('title', 'Orbana — Despacho inteligente para taxis')
@section('meta_description', 'Orbana centraliza tu operación: despacho en tiempo real, apps Driver y Passenger, monitoreo y reportes para tu flotilla.')

{{-- Menú (se inyecta al layout) --}}
@section('nav')
  <li><a href="#inicio" class="sub-menu-item">Inicio</a></li>
  <li><a href="#caracteristicas" class="sub-menu-item">Características</a></li>
  <li><a href="#apps" class="sub-menu-item">Apps</a></li>
  <li><a href="#pricing" class="sub-menu-item">Precio</a></li>
  <li><a href="#faq" class="sub-menu-item">FAQ</a></li>
  <li><a href="#contacto" class="sub-menu-item">Contacto</a></li>
@endsection

@section('content')

{{-- Hero --}}
<section
  id="inicio"
  class="relative md:h-screen md:py-0 py-28 items-center overflow-hidden bg-primary bg-center bg-no-repeat bg-cover"
  style="background-image:url('{{ asset('images/placeholder_map.png') }}');"
>
  <div class="container relative">
    <div class="grid grid-cols-1 md:mt-36 mt-10 text-center">

      <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">
        Sistema de despacho inteligente Cloud<br>
        <span class="text-white/90">para tu central y tu flotilla</span>
      </h1>

      <p class="text-white/75 text-lg max-w-2xl mx-auto">
        Operación en tiempo real: asignación por olas, monitoreo de conductores, App de conductor,
        seguridad, transparencia y reportes listos para crecer.
      </p>

      <div class="overflow-hidden mt-10">
        <img
          src="{{ asset('images/placeholder-map.png') }}"
          alt="Orbana Dispatch"
          class="mx-auto rounded-2xl shadow-lg border border-white/10 max-w-[1100px] w-full"
          loading="lazy"
        >
      </div>

      <div class="overflow-hidden after:content-[''] after:absolute after:h-14 after:w-14 after:bg-white/20 after:-top-[40px] after:start-[30%] after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>
      <div class="overflow-hidden after:content-[''] after:absolute after:h-10 after:w-10 after:bg-white/20 after:top-[30%] after:end-[20%] after:rounded-full after:animate-ping"></div>
    </div>
  </div>
</section>



{{-- Características --}}
<section id="caracteristicas" class="relative md:py-24 py-16 overflow-hidden">
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center">
      <h2 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">¿Qué resuelve Orbana?</h2>
      <p class="text-slate-400 max-w-2xl mx-auto">
        Diseñado para centrales reales: menos fricción operativa, más control, asignación transparente y datos accionables.
      </p>
    </div>

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
      {{-- Card --}}
      <div class="group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center">
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

      <div class="group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center md:mt-16">
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

      <div class="group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center">
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

      <div class="group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center md:mt-16">
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

{{-- dashboard images --}}
 <div class="container relative md:mt-24 mt-16">
              <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
  <div class="relative wow animate__ animate__fadeInLeft animated" data-wow-delay=".3s">
    {{-- Imagen placeholder: Dispatch --}}
    <img src="assets/images/saas/classic02.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="Panel Dispatch Orbana">
    <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-0 start-0 rotate-45 -z-1 rounded-3xl"></div>
  </div>

  <div class="lg:ms-8 wow animate__ animate__fadeInRight animated" data-wow-delay=".3s">
    <h4 class="mb-4 text-2xl leading-normal font-medium">
      Despacho inteligente en tiempo real <br> sin perder el control de la central
    </h4>

    <p class="text-slate-400">
      Ve a tus taxis en el mapa, el estado de cada unidad y los viajes activos. Orbana sugiere, prioriza y registra:
      tú defines reglas, radios, bases y criterios para que la asignación sea transparente y auditable.
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
        Historial por evento: quién asignó, cuándo, a qué taxi y por qué criterio
      </li>
    </ul>

    <div class="mt-4">
      <a href="#contacto" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
        Ver cómo funciona <i class="uil uil-angle-right-b align-middle"></i>
      </a>
    </div>
  </div>
</div>

  </div>






<div class="container relative md:mt-24 mt-16">
  <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
    <div class="relative order-1 md:order-2">
      {{-- Imagen placeholder: Driver --}}
      <img src="assets/images/saas/classic03.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="App Driver Orbana">
      <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 dark:bg-primary/20 bottom-0 end-0 rotate-45 -z-1 rounded-3xl"></div>
    </div>

    <div class="lg:me-8 order-2 md:order-1">
      <h4 class="mb-4 text-2xl leading-normal font-medium">
        App Driver enfocada en taxi: <br> ofertas claras, ruta y estados correctos
      </h4>

      <p class="text-slate-400">
        Menos llamadas, menos “¿quién va?”. El conductor recibe ofertas, confirma, navega y reporta estatus.
        La central ve el avance en vivo y queda registro de todo lo que pasa durante el servicio.
      </p>

      <ul class="list-none text-slate-400 mt-4">
        <li class="mb-1 flex">
          <i class="uil uil-check-circle text-primary text-xl me-2"></i>
          Flujo de servicio: aceptado, llegó, abordó, en viaje y finalizado
        </li>
        <li class="mb-1 flex">
          <i class="uil uil-check-circle text-primary text-xl me-2"></i>
          Ubicación en segundo plano con rumbo (bearing) y control de conexión
        </li>
        <li class="mb-1 flex">
          <i class="uil uil-check-circle text-primary text-xl me-2"></i>
          Reglas por central (tenant): bases, radio, ventanas de oferta y políticas operativas
        </li>
      </ul>

      <div class="mt-4">
        <a href="#apps" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
          Conocer las apps <i class="uil uil-angle-right-b align-middle"></i>
        </a>
      </div>
    </div>
  </div>
</div>



{{-- services --}}
<div id="servicios" class="container relative md:mt-24 mt-16">
  <div class="grid grid-cols-1 pb-8 items-end">
    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
      Servicios de Orbana para tu central de taxis
    </h3>
    <p class="text-slate-400 max-w-xl">
      Plataforma integral: despacho, apps, monitoreo y reportes. Diseñada para operación taxi (no delivery, no paquetería).
    </p>
  </div><!--end grid-->

  <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

    <!-- 1 -->
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-map"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#caracteristicas" class="text-lg font-medium group-hover:text-white duration-500">Mapa en vivo</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
          Ubicación, rumbo, estado y frescura de señal por taxi. Visualiza coberturas, bases y zonas operativas.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 2 -->
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-exchange"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#caracteristicas" class="text-lg font-medium group-hover:text-white duration-500">Despacho inteligente</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
          Olas de ofertas, prioridad por base, radios y filtros. Asignación transparente con bitácora por evento.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 3 -->
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-mobile-android"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#apps" class="text-lg font-medium group-hover:text-white duration-500">App Driver</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
          Ofertas, navegación y estados del servicio (llegó, abordó, en viaje, finalizado). Ubicación en segundo plano.
        </p>
      </div>
    </div><!--end feature-->

  <!-- 4 -->
<div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
  <div class="relative overflow-hidden text-transparent -m-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
    <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
      <i class="uil uil-globe"></i>
    </div>
  </div>

  <div class="mt-6">
    <a href="#modelo" class="text-lg font-medium group-hover:text-white duration-500">Orbana Global & White Label</a>
    <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
      Despliegues App White Label para tu central
      (tu marca, tus reglas, tus conductores) con infraestructura y soporte incluidos.
    </p>
  </div>
</div><!--end feature-->


    <!-- 5 -->
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-shield-check"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#seguridad" class="text-lg font-medium group-hover:text-white duration-500">Seguridad y roles</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
          Control por central (multi-tenant), permisos por rol, trazabilidad y auditoría de asignaciones y cambios.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 6 -->
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-chart-line"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#reportes" class="text-lg font-medium group-hover:text-white duration-500">Reportes operativos</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
          Ingresos y actividad por taxi/turno, tiempos de atención, cancelaciones y desempeño. Exportación a CSV/PDF.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 7 -->
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-map-marker-question"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#mapa-bi" class="text-lg font-medium group-hover:text-white duration-500">BI en mapa</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
          Zonas calientes, cobertura, tiempos de respuesta por área y análisis visual para decisiones de operación.
        </p>
      </div>
    </div><!--end feature-->

    <!-- 8 -->
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-primary dark:hover:bg-primary duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
      <div class="relative overflow-hidden text-transparent -m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon size-24 fill-primary/5 group-hover:fill-white/10"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
        <div class="absolute top-2/4 -translate-y-2/4 start-8 text-primary rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
          <i class="uil uil-invoice"></i>
        </div>
      </div>
      <div class="mt-6">
        <a href="#facturacion" class="text-lg font-medium group-hover:text-white duration-500">Plan y facturación</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">
          Control de plan por vehículo y facturas de la central. Historial de cobros y estado de pagos.
        </p>
      </div>
    </div><!--end feature-->

  </div>
</div>




{{-- App Driver --}}
<section id="apps-driver" class="relative md:pt-24 md:pb-36 pt-16 pb-24 bg-primary">
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center">
      <h3 class="wow animate__animated animate__fadeInUp mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-white"
          data-wow-duration="0.8s" data-wow-offset="60">
        App Driver Orbana
      </h3>

      <p class="wow animate__animated animate__fadeInUp max-w-2xl mx-auto text-white/80"
         data-wow-delay="0.08s" data-wow-duration="0.8s" data-wow-offset="60">
        Diseñada para taxi: ofertas claras, ruta sugerida, estados del servicio y ubicación en segundo plano.
        Menos fricción con la central, más control y trazabilidad.
      </p>

      <div class="wow animate__animated animate__fadeInUp mt-6 flex items-center justify-center gap-3 flex-wrap"
           data-wow-delay="0.14s" data-wow-duration="0.8s" data-wow-offset="60">
        <a href="{{ Route::has('public.app.driver') ? route('public.app.driver') : url('/app-driver') }}"
           class="py-2.5 px-6 inline-flex items-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-white/10 hover:bg-white/15 border-white/20 text-white rounded-md">
          Conocer más
          <i class="uil uil-angle-right-b"></i>
        </a>

        <a href="#contacto"
           class="py-2.5 px-6 inline-flex items-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-white text-primary hover:bg-white/90 border-white text-primary rounded-md">
          Solicitar demo
          <i class="uil uil-phone"></i>
        </a>
      </div>
    </div><!--end grid-->
  </div><!--end container-->
</section>

<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
  <div class="container relative">
    <div class="grid grid-cols-1">
      <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

          {{-- Card 1 --}}
          <div class="wow animate__animated animate__fadeInUp group relative rounded-xl overflow-hidden hover:shadow-sm dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500 h-fit border border-gray-100 dark:border-gray-800"
               data-wow-delay="0.05s" data-wow-offset="70">
            <div class="p-6 py-8 border-b border-gray-100 dark:border-gray-800">
              <div class="mx-auto size-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                <i class="uil uil-exchange text-2xl"></i>
              </div>
              <h5 class="text-lg font-semibold mt-4">Ofertas claras</h5>
              <p class="text-slate-400 mt-3">
                Recibe ofertas con origen/destino, monto y tiempo límite. Acepta o rechaza sin llamadas ni confusión.
              </p>
            </div>

            <div class="p-6 text-start">
              <ul class="list-none space-y-2 text-slate-400">
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Ventana de oferta y dedupe anti-spam
                </li>
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Historial por servicio y por día
                </li>
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Soporte para olas/prioridad por base
                </li>
              </ul>
            </div>

            <div class="p-4 bg-gray-50 dark:bg-slate-800">
              <a href="{{ Route::has('public.app.driver') ? route('public.app.driver') : url('/app-driver') }}"
                 class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
                Conocer más <i class="uil uil-angle-right-b align-middle"></i>
              </a>
            </div>
          </div>

          {{-- Card 2 --}}
          <div class="wow animate__animated animate__fadeInUp group relative rounded-xl overflow-hidden hover:shadow-sm dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500 h-fit border border-gray-100 dark:border-gray-800"
               data-wow-delay="0.12s" data-wow-offset="70">
            <div class="p-6 py-8 border-b border-gray-100 dark:border-gray-800">
              <div class="mx-auto size-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                <i class="uil uil-map-marker text-2xl"></i>
              </div>
              <h5 class="text-lg font-semibold mt-4">Ruta y estados</h5>
              <p class="text-slate-400 mt-3">
                Flujo completo: aceptado → llegó → abordó → en viaje → finalizado. La central ve el avance en vivo.
              </p>
            </div>

            <div class="p-6 text-start">
              <ul class="list-none space-y-2 text-slate-400">
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Ruta sugerida (con fallback) y ETA
                </li>
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Marcadores claros: pickup / destino / driver
                </li>
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Evidencia de eventos para auditoría
                </li>
              </ul>
            </div>

            <div class="p-4 bg-gray-50 dark:bg-slate-800">
              <a href="{{ Route::has('public.app.driver') ? route('public.app.driver') : url('/app-driver') }}"
                 class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
                Ver detalles <i class="uil uil-angle-right-b align-middle"></i>
              </a>
            </div>
          </div>

          {{-- Card 3 (destacada) --}}
          <div class="wow animate__animated animate__fadeInUp group relative rounded-xl overflow-hidden hover:shadow-sm dark:shadow-gray-800 hover:shadow-primary border-[3px] border-primary bg-white dark:bg-slate-900 text-center duration-500"
               data-wow-delay="0.19s" data-wow-offset="70">
            <div class="p-6 py-8 border-b border-gray-100 dark:border-gray-800">
              <div class="mx-auto size-12 rounded-xl bg-primary text-white flex items-center justify-center">
                <i class="uil uil-location-point text-2xl"></i>
              </div>
              <h5 class="text-lg font-semibold mt-4">Ubicación en segundo plano</h5>
              <p class="text-slate-400 mt-3">
                Reporte continuo con rumbo (bearing), control de “frescura” y detección de desconexión para operación real.
              </p>
            </div>

            <div class="p-6 text-start">
              <ul class="list-none space-y-2 text-slate-400">
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Intervalos más rápidos “on-ride” (mejor precisión)
                </li>
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Estados operativos: idle / ocupado / offline
                </li>
                <li class="flex items-start gap-2">
                  <i class="uil uil-check-circle text-primary text-xl mt-0.5"></i>
                  Notificaciones para ofertas y cambios de estado
                </li>
              </ul>
            </div>

            <div class="p-4 bg-primary">
              <a href="{{ Route::has('public.app.driver') ? route('public.app.driver') : url('/app-driver') }}"
                 class="inline-flex items-center justify-center gap-2 w-full py-2.5 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-white/10 hover:bg-white/15 border-white/20 text-white rounded-md">
                Conocer más de App Driver
                <i class="uil uil-angle-right-b"></i>
              </a>
              <p class="text-white/70 text-sm mt-3 mb-0">Enlace a página dedicada con capturas, flujo y requisitos.</p>
            </div>
          </div>

        </div><!--end grid-->
      </div>
    </div><!--end grid-->
  </div><!--end container-->
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
      <h2 class="mb-4 md:text-3xl text-2xl leading-normal font-semibold">Preguntas frecuentes</h2>
      <p class="text-slate-400 max-w-xl mx-auto">Respuestas rápidas para centrales y flotillas.</p>
    </div>

    <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
      <div class="shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800">
        <div class="font-semibold">¿Necesito internet estable en la base?</div>
        <p class="text-slate-400 mt-2">Sí. Orbana depende de tiempo real; con conexión estable el despacho es inmediato y auditable.</p>
      </div>

      <div class="shadow-sm dark:shadow-gray-800 rounded-xl p-6 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800">
        <div class="font-semibold">¿Se puede operar por bases/paraderos?</div>
        <p class="text-slate-400 mt-2">Sí. Soporta colas por paradero y prioridad por base antes de buscar conductores cercanos.</p>
      </div>
    </div>
  </div>
</section>

{{-- Pricing --}}
<section id="pricing" class="py-16">
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center">
      <h2 class="mb-4 md:text-3xl text-2xl leading-normal font-semibold">Precio</h2>
      <p class="text-slate-400 max-w-xl mx-auto">Un plan simple. Precios especiales para flotillas.</p>
    </div>

    <div class="max-w-2xl mx-auto">
      <div class="p-8 rounded-2xl shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800">
        <div class="flex items-center justify-between flex-wrap gap-4">
          <div>
            <div class="text-sm text-slate-400">Plan único</div>
            <div class="text-2xl font-semibold">Orbana Central</div>
          </div>
          <div class="text-right">
            <div class="text-4xl font-bold text-primary">$300</div>
            <div class="text-slate-400">MXN / vehículo / mes</div>
          </div>
        </div>

        <ul class="mt-6 text-slate-400 space-y-2">
          <li class="flex items-start gap-2"><i class="uil uil-check-circle text-primary text-xl"></i> Dispatch en tiempo real + mapa</li>
          <li class="flex items-start gap-2"><i class="uil uil-check-circle text-primary text-xl"></i> App Driver incluida</li>
          <li class="flex items-start gap-2"><i class="uil uil-check-circle text-primary text-xl"></i> Reportes operativos</li>
          <li class="flex items-start gap-2"><i class="uil uil-check-circle text-primary text-xl"></i> Soporte y onboarding</li>
        </ul>

        <div class="mt-6 flex gap-3 flex-wrap">
          <a href="#contacto" class="py-2 px-6 inline-flex font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:opacity-90 border-primary text-white rounded-md">
            Empezar
          </a>
          <a href="#contacto" class="py-2 px-6 inline-flex font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent border-primary text-primary hover:bg-primary hover:text-white rounded-md">
            Cotización flotilla
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



{{-- Contacto --}}
<section id="contacto" class="py-16">
  <div class="container relative">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px] items-center">
      <div>
        <h2 class="text-2xl font-semibold">Hablemos</h2>
        <p class="text-slate-400 mt-3">
          Agenda una demo o pide cotización para tu central. Respuesta rápida por WhatsApp o correo.
        </p>
        <ul class="mt-6 text-slate-400 space-y-2">
          <li class="flex items-center gap-2"><i class="uil uil-envelope text-primary text-xl"></i> ventas@orbana.mx</li>
          <li class="flex items-center gap-2"><i class="uil uil-phone text-primary text-xl"></i> +52 ___ ___ ____</li>
        </ul>
      </div>

      <div class="rounded-2xl p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 border border-gray-100 dark:border-gray-800">
        <form method="post" action="#">
          @csrf
          <div class="grid grid-cols-1 gap-4">
            <input class="form-input rounded-md w-full py-2 px-3 bg-gray-50 dark:bg-slate-800 border-0" placeholder="Nombre">
            <input class="form-input rounded-md w-full py-2 px-3 bg-gray-50 dark:bg-slate-800 border-0" placeholder="Teléfono / WhatsApp">
            <input class="form-input rounded-md w-full py-2 px-3 bg-gray-50 dark:bg-slate-800 border-0" placeholder="Correo">
            <textarea class="form-input rounded-md w-full py-2 px-3 bg-gray-50 dark:bg-slate-800 border-0" rows="4" placeholder="Cuéntanos tu caso..."></textarea>
            <button type="submit" class="py-2 px-5 font-semibold bg-primary hover:opacity-90 border border-primary text-white rounded-md">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
