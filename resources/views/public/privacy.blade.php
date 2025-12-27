@extends('layouts.public_tw')

@section('title', 'Aviso de privacidad · Orbana')
@section('meta_description', 'Aviso de privacidad de Orbana. Conoce cómo tratamos tus datos personales y de geolocalización.')



@section('content')

  {{-- Hero --}}
  <section class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/company/aboutus.jpg')] bg-no-repeat bg-center bg-cover">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>

    <div class="container relative">
      <div class="grid grid-cols-1 pb-8 text-center mt-10">
        <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Aviso de privacidad</h3>
        <p class="text-slate-300 text-lg max-w-xl mx-auto">
          Este documento se publicará pronto. Mientras tanto, aquí tienes un resumen de cómo tratamos los datos en Orbana.
        </p>
      </div>
    </div>

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
      <ul class="tracking-[0.5px] mb-0 inline-block">
        <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
          <a href="{{ route('landing') }}">Orbana</a>
        </li>
        <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
          <i class="uil uil-angle-right-b"></i>
        </li>
        <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">
          Privacidad
        </li>
      </ul>
    </div>
  </section>

  <div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
      <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>

  {{-- Content --}}
  <section class="relative md:py-24 py-16">
    <div class="container relative">
      <div class="md:flex justify-center">
        <div class="md:w-3/4">
          <div class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">

            {{-- Banner placeholder --}}
            <div class="p-4 rounded-lg bg-primary/10 border border-primary/20">
              <div class="flex items-start gap-3">
                <div class="text-primary text-2xl leading-none">
                  <i class="uil uil-shield-check"></i>
                </div>
                <div>
                  <h2 class="font-semibold text-slate-900 dark:text-white">Placeholder: Aviso de privacidad en preparación</h2>
                  <p class="text-slate-600 dark:text-slate-300 mt-1">
                    Este aviso está en proceso de formalización. Si necesitas el documento completo para tu operación,
                    contáctanos y te compartimos la versión preliminar.
                  </p>
                </div>
              </div>
            </div>

            {{-- Resumen rápido --}}
            <h2 class="text-xl font-semibold mb-4 mt-8">Resumen (provisional)</h2>
            <p class="text-slate-400">
              Orbana es una plataforma multi-tenant (por central) para operación y despacho (Dispatch), con apps móviles para conductor (Driver)
              y pasajero (Passenger). Para funcionar, tratamos datos operativos y, en algunos casos, datos personales.
            </p>

            <ul class="list-none text-slate-400 mt-4">
              <li class="flex mt-2">
                <i class="uil uil-arrow-right text-primary text-lg align-middle me-2"></i>
                <strong class="text-slate-600 dark:text-slate-200 me-1">Qué datos:</strong>
                nombre/teléfono (cuando aplique), datos de cuenta, datos de viaje (origen/destino), y geolocalización del conductor.
              </li>
              <li class="flex mt-2">
                <i class="uil uil-arrow-right text-primary text-lg align-middle me-2"></i>
                <strong class="text-slate-600 dark:text-slate-200 me-1">Para qué:</strong>
                asignación, ETA, seguridad operativa, trazabilidad, reportes y soporte.
              </li>
              <li class="flex mt-2">
                <i class="uil uil-arrow-right text-primary text-lg align-middle me-2"></i>
                <strong class="text-slate-600 dark:text-slate-200 me-1">Geolocalización:</strong>
                necesaria para despacho y seguimiento; puede requerir permisos “en uso” o “siempre” según el flujo.
              </li>
              <li class="flex mt-2">
                <i class="uil uil-arrow-right text-primary text-lg align-middle me-2"></i>
                <strong class="text-slate-600 dark:text-slate-200 me-1">Terceros:</strong>
                mapas/ruteo, mensajería/tiempo real, notificaciones y pagos (si se habilitan).
              </li>
              <li class="flex mt-2">
                <i class="uil uil-arrow-right text-primary text-lg align-middle me-2"></i>
                <strong class="text-slate-600 dark:text-slate-200 me-1">Multi-tenant:</strong>
                cada central ve solo su información; no se comparte entre tenants.
              </li>
            </ul>

            {{-- Secciones placeholder --}}
            <h2 class="text-xl font-semibold mb-4 mt-8">1) Responsable del tratamiento</h2>
            <p class="text-slate-400">
              Este apartado se completará con la razón social, domicilio, medios de contacto y encargado de privacidad.
            </p>

            <h2 class="text-xl font-semibold mb-4 mt-8">2) Datos personales recabados</h2>
            <p class="text-slate-400">
              Se detallará el catálogo de datos por módulo (Dispatch / Driver / Passenger) y por rol (operador, conductor, pasajero).
            </p>

            <h2 class="text-xl font-semibold mb-4 mt-8">3) Finalidades</h2>
            <p class="text-slate-400">
              Se listarán finalidades primarias (operación del servicio) y secundarias (mejora del producto, analítica),
              así como el mecanismo para limitar finalidades secundarias.
            </p>

            <h2 class="text-xl font-semibold mb-4 mt-8">4) Transferencias y encargados</h2>
            <p class="text-slate-400">
              Se describirán proveedores de infraestructura y servicios (mapas, notificaciones, pagos, mensajería) y el tipo de transferencia,
              cuando aplique.
            </p>

            <h2 class="text-xl font-semibold mb-4 mt-8">5) Seguridad, retención y derechos ARCO</h2>
            <p class="text-slate-400">
              Se incluirán medidas de seguridad, periodos de conservación y el procedimiento para ejercer derechos ARCO,
              además de revocación del consentimiento.
            </p>

            <h2 class="text-xl font-semibold mb-4 mt-8">6) Cambios al aviso</h2>
            <p class="text-slate-400">
              Cuando se publique la versión final, esta página mostrará la fecha de última actualización y los cambios relevantes.
            </p>

            <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-wrap items-center gap-3">
              <span class="text-sm text-slate-400">
                Última actualización: <strong class="text-slate-600 dark:text-slate-200">{{ now()->format('d M Y') }}</strong>
              </span>

              <a href="{{ route('landing') }}#contacto"
                 class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">
                Contactar
              </a>

              <a href="{{ route('landing') }}"
                 class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md">
                Volver al inicio
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
