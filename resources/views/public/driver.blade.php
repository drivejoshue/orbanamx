@extends('layouts.public_tw')

@section('title', 'App Driver · Orbana')
@section('meta_description', 'App Driver de Orbana: ofertas claras, ruta y estados correctos para operación taxi.')




@section('content')

  <!-- Start Hero -->
  <section class="relative table w-full py-36 md:py-56 md:pb-0 overflow-hidden bg-[url('../../assets/images/app/bg.png')] bg-top bg-no-repeat bg-fixed bg-cover">
    <div class="absolute inset-0 bg-primary opacity-80"></div>

    <div class="container relative z-2">
      <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">

        <div class="lg:col-span-8 md:col-span-7 md:mb-16">
          <div class="md:me-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.05s" data-wow-offset="70">
            <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">
              App Driver Orbana <br>
              operación taxi <br>
              en tiempo real
            </h1>

            <p class="text-white/70 text-lg max-w-xl">
              Ofertas claras, estados correctos del servicio y ubicación en vivo. Menos llamadas, más control y trazabilidad
              para la central.
            </p>

            <div class="mt-6">
              {{-- Placeholders: actualiza a URLs reales --}}
            
              <a href="#" class="inline-block m-1" aria-label="Google Play">
                <img src="{{ asset('assets/images/app/playstore.png') }}" class="inline-block" alt="Google Play">
              </a>
            </div>

            <div class="mt-8 flex flex-wrap gap-3">
              <a href="{{ route('landing') }}#contacto"
                 class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-white/10 hover:bg-white/15 border-white/20 text-white rounded-md">
                Solicitar demo
              </a>
              <a href="{{ route('landing') }}"
                 class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-white/10 border-white/20 text-white rounded-md">
                Volver al inicio
              </a>
            </div>
          </div>
        </div><!--end col-->

        <div class="lg:col-span-4 md:col-span-5 md:mt-0">
          <div class="relative wow animate__animated animate__fadeInUp" data-wow-delay="0.12s" data-wow-offset="70">
            <div class="relative after:content-[''] after:absolute after:h-40 after:w-40 after:bg-primary after:bottom-0 after:end-0 after:-z-0 after:rounded-3xl after:animate-[spin_10s_linear_infinite]">
              <img src="{{ asset('images/app.png') }}" class="relative z-1" alt="App Driver Orbana">
            </div>
          </div>
        </div><!--end col-->

      </div><!--end grid-->
    </div><!--end container-->
  </section><!--end section-->

  <div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
      <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Start Section-->
  <section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">

      <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.05s" data-wow-offset="70">
        <h6 class="text-primary text-sm font-bold uppercase mb-2">Características</h6>
        <h2 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">¿Qué resuelve la App Driver?</h2>
        <p class="text-slate-400 max-w-xl mx-auto">
          La app está pensada para operación taxi: aceptación rápida, estatus claros y ubicación en vivo para un despacho transparente.
        </p>
      </div><!--end grid-->

      <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">

        <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500 wow animate__animated animate__fadeInUp"
             data-wow-delay="0.08s" data-wow-offset="70">
          <div class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="uil uil-bolt"></i>
          </div>
          <div class="content mt-7">
            <div class="title h5 text-lg font-medium">Ofertas claras y rápidas</div>
            <p class="text-slate-400 mt-3">
              Recibe ofertas con monto, origen/destino y tiempo de expiración. Acepta sin llamadas y con registro.
            </p>
          </div>
        </div>

        <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500 wow animate__animated animate__fadeInUp"
             data-wow-delay="0.14s" data-wow-offset="70">
          <div class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="uil uil-route"></i>
          </div>
          <div class="content mt-7">
            <div class="title h5 text-lg font-medium">Ruta y seguimiento</div>
            <p class="text-slate-400 mt-3">
              Navega al punto de recogida y al destino. La central ve el avance en vivo y la bitácora del servicio.
            </p>
          </div>
        </div>

        <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500 wow animate__animated animate__fadeInUp"
             data-wow-delay="0.2s" data-wow-offset="70">
          <div class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="uil uil-shield-check"></i>
          </div>
          <div class="content mt-7">
            <div class="title h5 text-lg font-medium">Control operativo</div>
            <p class="text-slate-400 mt-3">
              Estados del servicio (aceptado, llegó, abordó, en viaje, finalizado) y ubicación en segundo plano.
            </p>
          </div>
        </div>

      </div>
    </div><!--end container-->

    {{-- Bloque 1 --}}
    <div class="container relative md:mt-24 mt-16">
      <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">

        <div class="relative wow animate__animated animate__fadeInLeft" data-wow-delay="0.08s" data-wow-offset="70">
          <img src="{{ asset('images/app2400.png') }}" class="mx-auto" alt="App Driver - Ofertas y estados">
          <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-2/4 translate-y-2/4 start-0 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
        </div>

        <div class="lg:ms-8 wow animate__animated animate__fadeInRight" data-wow-delay="0.12s" data-wow-offset="70">
          <h3 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">
            Flujo de servicio simple <br> y auditable
          </h3>
          <p class="text-slate-400">
            Todo queda registrado: aceptación, llegada, abordaje y finalización. La central reduce fricción y mejora tiempos de respuesta.
          </p>
          <ul class="list-none text-slate-400 mt-4">
            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Estados claros: aceptado · llegó · abordó · en viaje · finalizado</li>
            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Ubicación en vivo con rumbo (bearing) y señal “fresca”</li>
            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Menos llamadas: el panel ve avance y tiempos</li>
          </ul>
        </div>

      </div><!--end grid-->
    </div><!--end container-->

    {{-- Bloque 2 --}}
    <div class="container relative md:mt-24 mt-16">
      <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">

        <div class="relative order-1 md:order-2 wow animate__animated animate__fadeInRight" data-wow-delay="0.08s" data-wow-offset="70">
          <img src="{{ asset('images/app6350.png') }}" class="mx-auto" alt="App Driver - Operación por central">
          <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-2/4 translate-y-2/4 end-0 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
        </div>

        <div class="lg:me-8 order-2 md:order-1 wow animate__animated animate__fadeInLeft" data-wow-delay="0.12s" data-wow-offset="70">
          <h3 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">
            Reglas por central <br> (tenant) y operación por bases
          </h3>
          <p class="text-slate-400">
            La app se adapta a la forma de trabajar de la central: bases/paraderos, ventanas de oferta, radio operativo y políticas internas.
          </p>
          <ul class="list-none text-slate-400 mt-4">
            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Integración con bases/paraderos y colas operativas</li>
            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Control de conexión: inactivo / ocupado / offline</li>
            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Historial y trazabilidad por evento durante el servicio</li>
          </ul>
        </div>

      </div><!--end grid-->
    </div><!--end container-->

    {{-- Key Features (manteniendo tu estructura, pero con texto Orbana) --}}
    <div class="container relative md:mt-24 mt-16">
      <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.05s" data-wow-offset="70">
        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Funciones clave</h3>
        <p class="text-slate-400 max-w-xl mx-auto">
          Componentes pensados para taxi: control operativo, confiabilidad en tiempo real y experiencia clara para el conductor.
        </p>
      </div>

      <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">

        <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
          <div class="grid grid-cols-1 gap-[30px]">

            <div class="group flex duration-500 xl:p-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.08s" data-wow-offset="70">
              <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                <i data-feather="map" class="size-5"></i>
              </div>
              <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                <h4 class="mb-0 text-lg font-medium">Mapa y navegación</h4>
                <p class="text-slate-400 mt-3">Ruta a recogida y destino, con lectura clara para operación.</p>
              </div>
            </div>

            <div class="group flex duration-500 xl:p-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.14s" data-wow-offset="70">
              <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                <i data-feather="wifi" class="size-5"></i>
              </div>
              <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                <h4 class="mb-0 text-lg font-medium">Conexión controlada</h4>
                <p class="text-slate-400 mt-3">Estados operativos y detección de señal fresca para evitar “fantasmas”.</p>
              </div>
            </div>

            <div class="group flex duration-500 xl:p-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s" data-wow-offset="70">
              <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                <i data-feather="shield" class="size-5"></i>
              </div>
              <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                <h4 class="mb-0 text-lg font-medium">Seguridad y auditoría</h4>
                <p class="text-slate-400 mt-3">Registro por evento del servicio: quién, cuándo y qué se confirmó.</p>
              </div>
            </div>

          </div>
        </div>

        <div class="lg:col-span-4 md:col-span-12 lg:mx-8 lg:order-2 order-1 wow animate__animated animate__fadeInUp"
             data-wow-delay="0.08s" data-wow-offset="70">
          <img src="{{ asset('images/app4350.png') }}" class="mx-auto md:max-w-[300px]" alt="Features Orbana Driver">
        </div>

        <div class="lg:col-span-4 md:col-span-6 order-3">
          <div class="grid grid-cols-1 gap-[30px]">

            <div class="group flex duration-500 xl:p-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s" data-wow-offset="70">
              <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                <i data-feather="clock" class="size-5"></i>
              </div>
              <div class="flex-1 ms-4">
                <h4 class="mb-0 text-lg font-medium">Ofertas con expiración</h4>
                <p class="text-slate-400 mt-3">Ventanas de oferta configurables y control de aceptación.</p>
              </div>
            </div>

            <div class="group flex duration-500 xl:p-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.16s" data-wow-offset="70">
              <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                <i data-feather="smartphone" class="size-5"></i>
              </div>
              <div class="flex-1 ms-4">
                <h4 class="mb-0 text-lg font-medium">Optimizada para Android</h4>
                <p class="text-slate-400 mt-3">Interfaz simple, rápida y lista para uso diario en calle.</p>
              </div>
            </div>

            <div class="group flex duration-500 xl:p-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.22s" data-wow-offset="70">
              <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                <i data-feather="message-circle" class="size-5"></i>
              </div>
              <div class="flex-1 ms-4">
                <h4 class="mb-0 text-lg font-medium">Soporte operativo</h4>
                <p class="text-slate-400 mt-3">Canales de ayuda/avisos (placeholder si lo conectas después).</p>
              </div>
            </div>

          </div>
        </div>

      </div><!--end grid-->
    </div><!--end container-->

    {{-- Call to action: Mobile Apps --}}
    <div class="container relative md:mt-24 mt-16 z-2">
      <div class="grid md:grid-cols-12 grid-cols-1 items-center">

        <div class="lg:col-span-5 md:col-span-6 wow animate__animated animate__fadeInLeft" data-wow-delay="0.08s" data-wow-offset="70">
          <img src="{{ asset('assets/images/illustrator/envelope.svg') }}" class="mx-auto d-block" alt="Orbana Driver Apps">
        </div>

        <div class="lg:col-span-7 md:col-span-6 wow animate__animated animate__fadeInRight" data-wow-delay="0.12s" data-wow-offset="70">
          <span class="bg-primary/5 text-primary text-xs font-bold px-2.5 py-0.5 rounded h-5">Apps móviles</span>
          <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">
            Disponible para <br> smartphones Android
          </h4>
          <p class="text-slate-400 max-w-xl mb-0">
            Si tu central opera en tiempo real, la app es la extensión del despacho: ubicación en vivo, estatus correctos y trazabilidad.
          </p>

          <div class="my-5">
            {{-- Placeholders: actualiza a URLs reales --}}
            
            <a href="#" class="m-1 inline-block" aria-label="Google Play">
              <img src="{{ asset('assets/images/app/playstore.png') }}" class="inline-block" alt="Google Play">
            </a>
          </div>

          <div class="inline-block">
            <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-800">
              <i data-feather="smartphone" class="me-2 text-primary size-10"></i>
              <div class="content">
                <h6 class="text-base font-medium">Instala la app y prueba el flujo completo</h6>
                <a href="{{ route('landing') }}#contacto"
                   class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">
                  Solicitar acceso <i class="uil uil-angle-right-b"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div><!--end grid-->
    </div><!--end container-->

  </section><!--end section-->

  <div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-slate-900">
      <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>

@endsection
