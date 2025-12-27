@extends('layouts.public_tw')

@section('title', 'Orbana Dispatch — Operación y despacho en tiempo real')
@section('meta_description', 'Orbana Dispatch: panel operativo para centrales de taxi. Mapa en vivo, asignación inteligente, colas por paradero, programados, reportes y trazabilidad.')

@section('content')

{{-- HERO --}}
<div class="dark">
  <section class="relative table w-full lg:py-40 md:py-36 pt-36 pb-24 overflow-hidden
                  bg-white text-slate-900
                  dark:bg-slate-900 dark:text-white">

    <div class="absolute inset-0 bg-[url('../../assets/images/overlay.png')] bg-repeat opacity-10 dark:opacity-60"></div>

    <div class="container relative z-1">
      <div class="relative grid lg:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">

        <div class="lg:col-span-7">
          <div class="lg:me-6 lg:text-start text-center">

            <h1 class="wow animate__animated animate__fadeInUp font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl mb-5"
                data-wow-duration="0.85s" data-wow-offset="80">
              Despacho Inteligente <br>
              Cloud
              <span class="typewrite bg-gradient-to-tl to-primary from-primary-500 text-transparent bg-clip-text"
                    data-period="2000"
                    data-type="[ &quot;Tiempo real&quot;, &quot;Google Maps&quot;, &quot;New Taxi Level&quot; ]">
                <span class="wrap">Conectando ...</span>
              </span>
            </h1>

            <p class="wow animate__animated animate__fadeInUp text-lg max-w-xl lg:ms-0 mx-auto text-slate-600 dark:text-slate-200"
               data-wow-delay="0.10s" data-wow-duration="0.85s" data-wow-offset="80">
              Empieza ahora , se parte de la nueva generacion de plataforma de taxi.
            </p>

            {{-- Si luego agregas botones/cta, aplica wow aquí igual con delay 0.18s --}}
            {{-- <div class="wow animate__animated animate__fadeInUp mt-6" data-wow-delay="0.18s" data-wow-duration="0.85s" data-wow-offset="80"> ... </div> --}}

          </div>
        </div>

        <div class="lg:col-span-5">
          <div class="relative
                      after:content-[''] after:absolute lg:after:-top-0 after:-top-10 after:-right-32 after:size-[36rem]
                      after:border-2 after:border-dashed after:border-slate-300 dark:after:border-slate-700
                      after:rounded-full after:animate-[spin_120s_linear_infinite] after:-z-1
                      before:content-[''] before:absolute lg:before:-top-24 before:-top-36 before:-right-56 before:size-[48rem]
                      before:border-2 before:border-dashed before:border-slate-200 dark:before:border-slate-700
                      before:rounded-full before:animate-[spin_240s_linear_infinite] before:-z-1">

            <div class="relative
                        after:content-[''] after:absolute lg:after:-top-0 after:-top-10 after:-right-40 after:size-[36rem]
                        after:bg-gradient-to-tl after:to-primary/30 after:from-red-600/30
                        dark:after:to-primary/50 dark:after:from-red-600/50
                        after:blur-[200px] after:rounded-full after:-z-1">

              <img src="images/dispatch1.png"
                   class="wow animate__animated animate__fadeInRight lg:max-w-none lg:ms-14"
                   data-wow-delay="0.08s" data-wow-duration="0.95s" data-wow-offset="80"
                   alt="">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>

{{-- =========================
     BLOQUE: Imagen + 3 cards (beneficios top)
     ========================= --}}
<div class="container relative md:mt-24 mt-16">
  <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">

    {{-- Imagen (placeholder) --}}
    <div class="relative">
      <img src="images/dispatch2.png"
           class="wow animate__animated animate__fadeInLeft rounded-lg shadow-md dark:shadow-gray-800"
           data-wow-delay="0.05s" data-wow-duration="0.9s" data-wow-offset="90"
           alt="Orbana Dispatch - Mapa operativo y panel">

      <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-0 start-0 rotate-45 -z-1 rounded-3xl"></div>
    </div>

    {{-- Cards --}}
    <div class="lg:ms-8">
      <div class="grid grid-cols-1 gap-[18px]">

        {{-- Card 1 --}}
        <div class="wow animate__animated animate__fadeInUp group flex items-center relative overflow-hidden p-6 rounded-md shadow-sm dark:shadow-gray-800
                    bg-gray-50 dark:bg-slate-800 hover:bg-primary dark:hover:bg-primary duration-500"
             data-wow-delay="0.06s" data-wow-duration="0.85s" data-wow-offset="90">
          <span class="text-primary group-hover:text-white text-5xl font-semibold duration-500">
            <i class="uil uil-map-marker"></i>
          </span>

          <div class="flex-1 ms-3">
            <h5 class="group-hover:text-white text-xl font-semibold duration-500">Mapa operativo en vivo</h5>
            <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-2">
              Conductores, sectores y paraderos en tiempo real. Filtros, foco por viaje y seguimiento driver → pickup → destino.
            </p>
          </div>

          <div class="absolute start-1 top-5 text-slate-900/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.05] duration-500">
            <i class="uil uil-map-marker"></i>
          </div>
        </div>

        {{-- Card 2 --}}
        <div class="wow animate__animated animate__fadeInUp group flex items-center relative overflow-hidden p-6 rounded-md shadow-sm dark:shadow-gray-800
                    bg-gray-50 dark:bg-slate-800 hover:bg-primary dark:hover:bg-primary duration-500"
             data-wow-delay="0.14s" data-wow-duration="0.85s" data-wow-offset="90">
          <span class="text-primary group-hover:text-white text-5xl font-semibold duration-500">
            <i class="uil uil-bolt"></i>
          </span>

          <div class="flex-1 ms-3">
            <h5 class="group-hover:text-white text-xl font-semibold duration-500">Asignación inteligente (sin caos)</h5>
            <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-2">
              Olas de ofertas por radio, prioridad por paradero, reglas anti-spam e idempotencia para evitar duplicados.
            </p>
          </div>

          <div class="absolute start-1 top-5 text-slate-900/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.05] duration-500">
            <i class="uil uil-bolt"></i>
          </div>
        </div>

        {{-- Card 3 --}}
        <div class="wow animate__animated animate__fadeInUp group flex items-center relative overflow-hidden p-6 rounded-md shadow-sm dark:shadow-gray-800
                    bg-gray-50 dark:bg-slate-800 hover:bg-primary dark:hover:bg-primary duration-500"
             data-wow-delay="0.22s" data-wow-duration="0.85s" data-wow-offset="90">
          <span class="text-primary group-hover:text-white text-5xl font-semibold duration-500">
            <i class="uil uil-graph-bar"></i>
          </span>

          <div class="flex-1 ms-3">
            <h5 class="group-hover:text-white text-xl font-semibold duration-500">Reportes y BI que sí sirven</h5>
            <p class="text-slate-400 group-hover:text-white/70 duration-500 mt-2">
              KPIs, ingresos, cancelaciones y mapa de demanda (heatmap). Decisiones rápidas con datos claros.
            </p>
          </div>

          <div class="absolute start-1 top-5 text-slate-900/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.05] duration-500">
            <i class="uil uil-graph-bar"></i>
          </div>
        </div>

      </div>
    </div>

  </div><!--end grid-->
</div>

{{-- =========================
     BLOQUE: Key Features (grid)
     ========================= --}}
<section class="relative md:py-24 py-16 overflow-hidden">
  <div class="container relative">

    <div class="grid grid-cols-1 pb-8 text-center">
      <h3 class="wow animate__animated animate__fadeInUp mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold"
          data-wow-duration="0.85s" data-wow-offset="80">
        Funciones clave de Orbana Core Dispatch
      </h3>

      <p class="wow animate__animated animate__fadeInUp text-slate-400 max-w-2xl mx-auto"
         data-wow-delay="0.10s" data-wow-duration="0.85s" data-wow-offset="80">
        Diseñado para operación real: rapidez, control y trazabilidad. Menos “dashboard bonito”, más herramientas para mover unidades con orden.
      </p>
    </div>

    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8">

      {{-- 1 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.05s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-location-point rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Vista en vivo (mapa + estado)</h4>
            <p class="text-slate-400 mt-1 text-sm">Conductores libres/ocupados/en cola, frescura de ping y foco por viaje.</p>
          </div>
        </div>
      </div>

      {{-- 2 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.12s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-exchange rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Olas y asignación directa</h4>
            <p class="text-slate-400 mt-1 text-sm">Wave por radio, límites, expiración y re-oferta; o asignación manual si lo prefieres.</p>
          </div>
        </div>
      </div>

      {{-- 3 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.19s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-list-ui-alt rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Colas por paradero</h4>
            <p class="text-slate-400 mt-1 text-sm">Chips compactos, detalle expandible, posiciones y promoción automática.</p>
          </div>
        </div>
      </div>

      {{-- 4 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.26s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-schedule rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Viajes programados</h4>
            <p class="text-slate-400 mt-1 text-sm">Activación por hora, control de SLA y re-oferta automática si nadie acepta.</p>
          </div>
        </div>
      </div>

      {{-- 5 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.33s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-route rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Cotización y ruta sugerida</h4>
            <p class="text-slate-400 mt-1 text-sm">Distancia/tiempo estimado con fallback, paradas (hasta 2) y tarifa sugerida.</p>
          </div>
        </div>
      </div>

      {{-- 6 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.40s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-shield-check rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Trazabilidad y auditoría</h4>
            <p class="text-slate-400 mt-1 text-sm">Historial por viaje: quién asignó, canceló, liberó, con timestamps y evidencia.</p>
          </div>
        </div>
      </div>

      {{-- 7 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.47s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-exclamation-triangle rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Incidencias y ayuda</h4>
            <p class="text-slate-400 mt-1 text-sm">Motivos de cancelación, reportes operativos y botón de ayuda para situaciones reales.</p>
          </div>
        </div>
      </div>

      {{-- 8 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.54s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-chart-growth rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Dashboards y KPIs</h4>
            <p class="text-slate-400 mt-1 text-sm">Servicios, ingresos, ticket promedio, cancelaciones, rating y tendencia por periodo.</p>
          </div>
        </div>
      </div>

      {{-- 9 --}}
      <div class="lg:col-span-4 md:col-span-6">
        <div class="wow animate__animated animate__fadeInUp flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700
                    ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700"
             data-wow-delay="0.61s" data-wow-duration="0.85s" data-wow-offset="90">
          <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-primary/10 text-primary text-center rounded-full me-3">
            <i class="uil uil-fire rotate-45 text-xl"></i>
          </div>
          <div class="flex-1">
            <h4 class="mb-0 text-lg font-medium">Mapa de demanda (BI)</h4>
            <p class="text-slate-400 mt-1 text-sm">Heatmap por solicitudes/servicios/cancelaciones para entender dónde y cuándo te piden más.</p>
          </div>
        </div>
      </div>

    </div><!--end grid-->

    {{-- CTA --}}
    <div class="grid grid-cols-1 justify-center">
      <div class="wow animate__animated animate__fadeInUp mt-8 text-center"
           data-wow-delay="0.12s" data-wow-duration="0.85s" data-wow-offset="80">
        <a href="{{ route('landing') }}#contacto"
           class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center
                  bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md me-2 mt-2">
          Ver demo y cotización <i class="uil uil-arrow-right"></i>
        </a>
      </div>
    </div>

  </div><!--end container-->
</section>

@endsection
