{{-- resources/views/public/terms.blade.php --}}
@extends('layouts.public_tw')

@section('title', 'Términos y Condiciones · Orbana')
@section('meta_description', 'Términos y Condiciones del Servicio Orbana para Centrales (Tenant) y Políticas de Uso y Código de Conducta de Orbana Driver.')

@section('nav')
  @include('partials.public.nav', ['navMode' => 'landing'])
@endsection

@section('content')

{{-- HERO --}}
<section class="relative table w-full py-28 lg:py-36 bg-gray-50 dark:bg-slate-800">
  <div class="container relative">
    <div class="grid grid-cols-1 text-center mt-10">
      <h1 class="text-3xl md:text-4xl leading-normal font-semibold text-slate-900 dark:text-white">
        Términos y Condiciones · Orbana
      </h1>
      <p class="mt-3 text-slate-500 dark:text-slate-300 max-w-3xl mx-auto">
        Documentación legal y de uso: Servicio para Centrales (Tenant) y Políticas de Conducta para conductores (Orbana Driver).
      </p>

      <div class="mt-6 flex flex-wrap items-center justify-center gap-2">
        <a href="#tenant-terms"
           class="px-4 py-2 rounded-md text-sm font-semibold border border-slate-200 dark:border-slate-700
                  bg-white dark:bg-slate-900 text-slate-900 dark:text-white
                  hover:border-primary hover:text-primary dark:hover:border-primary dark:hover:text-primary">
          Ver Términos (Tenant)
        </a>
        <a href="#driver-policies"
           class="px-4 py-2 rounded-md text-sm font-semibold border border-primary
                  bg-primary text-white hover:bg-primary-700">
          Ver Políticas (Driver)
        </a>
      </div>

       
    </div>
  </div>

  {{-- Breadcrumb opcional --}}
  <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
    <ul class="tracking-[0.5px] mb-0 inline-block text-sm">
      <li class="inline-block uppercase text-[12px] font-bold duration-500 ease-in-out hover:text-primary">
        <a href="{{ url('/') }}">Orbana</a>
      </li>
      <li class="inline-block text-base text-slate-950 dark:text-white mx-1">/</li>
      <li class="inline-block uppercase text-[12px] font-bold text-primary" aria-current="page">
        Términos
      </li>
    </ul>
  </div>
</section>

{{-- WAVE SHAPE --}}
<div class="relative">
  <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
    <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
  </div>
</div>

{{-- CONTENT --}}
<section class="relative md:py-24 py-16">
  <div class="container relative">
    <div class="md:flex justify-center">
      <div class="md:w-3/4">

        {{-- CARD --}}
        <div class="p-6 md:p-8 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">

          {{-- ======= TOC ======= --}}
          <div class="mb-8">
            <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Contenido</h2>
            <ul class="mt-3 text-slate-600 dark:text-slate-300 space-y-2">
              <li>
                <a class="hover:text-primary" href="#tenant-terms">1) Términos y Condiciones del Servicio · Centrales / Tenant</a>
              </li>
              <li>
                <a class="hover:text-primary" href="#driver-policies">2) Políticas de Uso y Código de Conducta · Orbana Driver</a>
              </li>
            </ul>
          </div>

          {{-- ===================================================================== --}}
          {{-- 1) TÉRMINOS TENANT --}}
          {{-- ===================================================================== --}}
          <div id="tenant-terms" class="scroll-mt-28">
            <div class="flex items-start justify-between gap-4 flex-wrap">
              <div>
                <h2 class="text-2xl font-semibold text-slate-900 dark:text-white">
                  Términos y Condiciones del Servicio
                </h2>
                <p class="text-slate-500 dark:text-slate-300 mt-1">
                  Orbana — Centrales / Tenant
                </p>
              </div>

            
            </div>

            <div class="mt-6 space-y-4 text-slate-600 dark:text-slate-300">
              <p>
                Estos Términos y Condiciones (“Términos”) constituyen un acuerdo legalmente vinculante entre
                <span class="font-semibold text-slate-900 dark:text-white">Orbana</span> (“Orbana”, “nosotros”)
                y la central de transporte, empresa o entidad contratante (“Central”, “Tenant”, “usted”),
                respecto al acceso y uso de la plataforma tecnológica Orbana, que incluye el panel de despacho,
                aplicaciones móviles, APIs y servicios asociados (la “Plataforma”).
              </p>
              <p>
                Al acceder o utilizar la Plataforma, la Central declara haber leído, comprendido y aceptado estos Términos.
              </p>

              {{-- 1. Naturaleza --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">1. Naturaleza del servicio</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">1.1.</span> Orbana proporciona una plataforma tecnológica de despacho y gestión operativa.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">1.2.</span> Orbana no presta servicios de transporte, no actúa como empresa transportista ni como intermediario comercial.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">1.3.</span> Cualquier servicio de transporte se celebra exclusivamente entre la Central, el conductor y/o el usuario final.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">1.4.</span> Orbana no asume responsabilidad por:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Cancelaciones</li>
                <li>Retrasos</li>
                <li>Tarifas</li>
                <li>Accidentes</li>
                <li>Reembolsos</li>
                <li>Actos u omisiones de conductores o usuarios</li>
              </ul>

              {{-- 2. Relación --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">2. Relación entre las partes</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">2.1.</span> Este acuerdo no crea relación laboral, societaria, de representación ni de agencia entre Orbana y la Central.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">2.2.</span> La Central es la única responsable de su operación, conductores, vehículos, tarifas, cobros y cumplimiento normativo.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">2.3.</span> Orbana no mantiene relación directa con los conductores ni con los usuarios finales de la Central.</li>
              </ul>

              {{-- 3. Registro --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">3. Registro y cuenta del Tenant</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">3.1.</span> Para usar Orbana, la Central debe crear una cuenta administrativa.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">3.2.</span> La Central es responsable de:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>La veracidad de la información proporcionada</li>
                <li>La custodia de credenciales</li>
                <li>Todas las acciones realizadas desde su cuenta</li>
              </ul>
              <p class="mt-3">
                Orbana podrá modificar o suspender cuentas con información falsa o uso indebido.
              </p>

              {{-- 4. Conductores --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">4. Conductores y uso de Orbana Driver</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">4.1.</span> Los conductores son dados de alta y gestionados exclusivamente por la Central.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">4.2.</span> La Central se obliga a exigir a sus conductores el cumplimiento del Código de Conducta y Políticas de Uso Orbana Driver.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">4.3.</span> Orbana podrá:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Limitar funciones</li>
                <li>Suspender accesos</li>
                <li>Bloquear cuentas de conductor</li>
              </ul>
              <p class="mt-3">
                Cuando detecte conductas de riesgo, ilícitas o reiteradas, Orbana podrá actuar a nivel plataforma e informar a la Central.
              </p>

              {{-- 5. Uso legítimo --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">5. Uso legítimo de la plataforma</h3>
              <p class="mt-3">
                La Central se compromete a:
              </p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Usar la Plataforma únicamente para fines operativos legítimos</li>
                <li>No manipular datos, ubicaciones o estados</li>
                <li>No usar bots, scripts o automatizaciones no autorizadas</li>
                <li>No intentar acceder a sistemas restringidos</li>
                <li>No revender, sublicenciar o explotar Orbana sin autorización</li>
              </ul>

              {{-- 6. Prohibidas --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">6. Actividades prohibidas</h3>
              <p class="mt-3">Está estrictamente prohibido:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Ingeniería inversa del software</li>
                <li>Extracción masiva de datos</li>
                <li>Uso de Orbana para competir con Orbana</li>
                <li>Creación de cuentas falsas</li>
                <li>Suplantación de identidad</li>
                <li>Venta o cesión de cuentas</li>
                <li>Uso del sistema con fines ilícitos</li>
              </ul>

              {{-- 7. Admin plataforma --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">7. Intervención y administración de la plataforma</h3>
              <p class="mt-3">
                Orbana podrá, a su discreción y a nivel plataforma:
              </p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Supervisar el uso del sistema</li>
                <li>Preservar registros y logs</li>
                <li>Suspender o limitar cuentas</li>
                <li>Eliminar contenido</li>
                <li>Reportar actividades ilícitas a autoridades cuando sea legalmente requerido</li>
              </ul>
              <p class="mt-3">
                Esto no sustituye la autoridad interna de la Central.
              </p>

              {{-- 8. Pagos --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">8. Pagos, facturación y suspensión</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">8.1.</span> La Central pagará el servicio conforme al plan contratado.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">8.2.</span> El incumplimiento de pago podrá resultar en:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Suspensión parcial o total</li>
                <li>Bloqueo de apps Driver / Passenger</li>
                <li>Limitación del panel de despacho</li>
              </ul>
              <p class="mt-3">
                Orbana no será responsable frente a terceros por suspensiones derivadas de adeudos.
              </p>

              {{-- 9. Terceros --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">9. Servicios de terceros</h3>
              <p class="mt-3">Orbana no es responsable por:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Servicios de mapas</li>
                <li>Pasarelas de pago</li>
                <li>Servicios de mensajería</li>
                <li>Infraestructura de telecomunicaciones</li>
                <li>Contenido de terceros</li>
              </ul>
              <p class="mt-3">
                El uso de dichos servicios es bajo responsabilidad de la Central.
              </p>

              {{-- 10. Datos --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">10. Datos y privacidad</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">10.1.</span> La Central conserva la titularidad de sus datos operativos.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">10.2.</span> Orbana podrá:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Procesar datos para la operación del sistema</li>
                <li>Generar estadísticas agregadas</li>
                <li>Almacenar información conforme a su Política de Privacidad</li>
              </ul>

              {{-- 11. Garantías --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">11. Exención de garantías</h3>
              <p class="mt-3">
                La Plataforma se ofrece “tal cual”, sin garantías explícitas o implícitas de disponibilidad, continuidad o ausencia de errores.
              </p>

              {{-- 12. Responsabilidad --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">12. Limitación de responsabilidad</h3>
              <p class="mt-3">Orbana no será responsable por:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Daños indirectos o consecuentes</li>
                <li>Pérdida de datos</li>
                <li>Fallas de terceros</li>
                <li>Uso indebido del sistema</li>
              </ul>
              <p class="mt-3">
                La responsabilidad total de Orbana se limita al monto efectivamente pagado por la Central en el periodo correspondiente.
              </p>

              {{-- 13. Indemnización --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">13. Indemnización</h3>
              <p class="mt-3">
                La Central acepta indemnizar y mantener indemne a Orbana frente a cualquier reclamación derivada de:
              </p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Su operación</li>
                <li>Actos de conductores</li>
                <li>Incumplimiento legal</li>
                <li>Uso indebido de la Plataforma</li>
              </ul>

              {{-- 14. Modificaciones --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">14. Modificaciones del servicio y términos</h3>
              <p class="mt-3">
                Orbana podrá modificar la Plataforma o estos Términos en cualquier momento.
                El uso continuado del servicio constituye aceptación de dichas modificaciones.
              </p>

              {{-- 15. Terminación --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">15. Terminación</h3>
              <p class="mt-3">Orbana podrá suspender o cancelar el servicio por:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Incumplimiento de estos Términos</li>
                <li>Uso ilícito</li>
                <li>Riesgo operativo o legal</li>
                <li>Falta de pago</li>
              </ul>

              {{-- 16. Comunicaciones --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">16. Comunicaciones electrónicas</h3>
              <p class="mt-3">
                La Central acepta recibir comunicaciones electrónicas y notificaciones digitales como medio válido.
              </p>

              {{-- 17. Ley/Jurisdicción --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">17. Legislación aplicable y jurisdicción</h3>
              <p class="mt-3">
                Estos Términos se rigen por las leyes de los Estados Unidos Mexicanos.
                Cualquier controversia se someterá a los tribunales competentes del domicilio de Orbana.
              </p>

              {{-- 18. Acuerdo completo --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">18. Acuerdo completo</h3>
              <p class="mt-3">
                Estos Términos constituyen el acuerdo completo entre Orbana y la Central, sustituyendo cualquier acuerdo previo.
              </p>

              
            </div>
          </div>

          {{-- DIVIDER --}}
          <div class="my-12 border-t border-slate-200 dark:border-slate-700"></div>

          {{-- ===================================================================== --}}
          {{-- 2) POLÍTICAS DRIVER --}}
          {{-- ===================================================================== --}}
          <div id="driver-policies" class="scroll-mt-28">
            <div class="flex items-start justify-between gap-4 flex-wrap">
              <div>
                <h2 class="text-2xl font-semibold text-slate-900 dark:text-white">
                  Políticas de Uso y Código de Conducta
                </h2>
                <p class="text-slate-500 dark:text-slate-300 mt-1">
                  Orbana Driver
                </p>
              </div>

             
            </div>

            <div class="mt-6 space-y-4 text-slate-600 dark:text-slate-300">
              <p>
                Este documento establece las políticas de uso, reglas de conducta y responsabilidades mínimas aplicables a los conductores
                que utilizan la aplicación Orbana Driver dentro de una central afiliada a Orbana.
              </p>
              <p>
                Estas políticas no constituyen una relación laboral ni comercial directa entre Orbana y el conductor.
              </p>

              {{-- 1. Alcance --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">1. Alcance y relación con la central</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">1.1.</span> Orbana es una plataforma tecnológica que presta servicios a centrales de taxi para la gestión y despacho de viajes.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">1.2.</span> El conductor es dado de alta, gestionado y autorizado por su central, no por Orbana.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">1.3.</span> Cualquier relación laboral, contractual, económica o disciplinaria existe exclusivamente entre el conductor y su central.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">1.4.</span> El uso de Orbana Driver implica la aceptación de estas políticas como condición mínima de acceso a la plataforma.</li>
              </ul>

              {{-- 2. Perfil / veracidad --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">2. Perfil del conductor y veracidad de información</h3>
              <p class="mt-3">El conductor se compromete a:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Proporcionar información personal y vehicular veraz, completa y actualizada.</li>
                <li>No utilizar documentos falsos, alterados o vencidos.</li>
                <li>Mantener actualizados:</li>
              </ul>
              <ul class="mt-2 ms-10 list-disc space-y-1">
                <li>Licencia de conducir</li>
                <li>Identificación oficial</li>
                <li>Datos del vehículo</li>
                <li>Fotografía de perfil real y reciente</li>
              </ul>
              <p class="mt-3">
                Orbana podrá restringir o suspender el acceso si detecta información falsa o inconsistente, notificando a la central correspondiente.
              </p>

              {{-- 3. Vehículo --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">3. Condiciones del vehículo</h3>
              <p class="mt-3">El conductor es responsable de operar únicamente vehículos que cumplan con:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Buen estado mecánico y estructural</li>
                <li>Condiciones adecuadas de limpieza interior y exterior</li>
                <li>Funcionamiento correcto de frenos, luces, cinturones y seguros</li>
                <li>Cumplimiento de la normatividad local vigente</li>
              </ul>
              <p class="mt-3">
                Orbana no realiza inspecciones físicas, pero puede restringir el acceso ante reportes reiterados o evidencia de incumplimiento.
              </p>

              {{-- 4. Conducta --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">4. Conducta esperada durante el servicio</h3>
              <p class="mt-3">El conductor deberá mantener en todo momento una conducta:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Profesional</li>
                <li>Respetuosa</li>
                <li>Libre de violencia verbal o física</li>
                <li>Libre de discriminación, acoso o amenazas</li>
              </ul>

              <p class="mt-4 font-semibold text-slate-900 dark:text-white">
                Está estrictamente prohibido:
              </p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Consumir alcohol o sustancias ilícitas durante la operación</li>
                <li>Portar armas no autorizadas</li>
                <li>Manipular la aplicación de forma fraudulenta</li>
                <li>Aceptar un viaje y no atenderlo sin causa justificada</li>
                <li>Solicitar pagos fuera de lo establecido por la central</li>
              </ul>

              {{-- 5. Uso correcto app --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">5. Uso correcto de la aplicación Orbana Driver</h3>
              <p class="mt-3">El conductor NO debe:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Compartir su cuenta o credenciales</li>
                <li>Manipular ubicación GPS de forma intencional</li>
                <li>Usar software de terceros para alterar estados, tiempos o rutas</li>
                <li>Interferir con el funcionamiento normal de la app</li>
              </ul>
              <p class="mt-3">
                Orbana se reserva el derecho de detectar patrones anómalos y reportarlos a la central.
              </p>

              {{-- 6. Seguridad --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">6. Seguridad y situaciones de riesgo</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">6.1.</span> El conductor debe priorizar su seguridad y la del usuario.</li>
                <li class="flex gap-2"><span class="text-primary font-bold">6.2.</span> En situaciones de riesgo, podrá:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Cancelar el servicio con causa justificada</li>
                <li>Reportar el incidente desde la app o a su central</li>
              </ul>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">6.3.</span> Orbana podrá:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Registrar incidencias</li>
                <li>Bloquear temporalmente cuentas involucradas</li>
                <li>Preservar evidencia digital (logs, ubicaciones, eventos)</li>
              </ul>

              {{-- 7. Reportes --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">7. Reportes, quejas e incidencias</h3>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">7.1.</span> Los usuarios y la central pueden reportar:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Malas conductas</li>
                <li>Incumplimiento de servicio</li>
                <li>Situaciones de riesgo o ilícitos</li>
              </ul>
              <ul class="mt-3 space-y-2">
                <li class="flex gap-2"><span class="text-primary font-bold">7.2.</span> Orbana no sanciona económicamente, pero sí puede:</li>
              </ul>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Limitar funcionalidades</li>
                <li>Suspender acceso a la plataforma</li>
                <li>Recomendar a la central la baja definitiva del conductor</li>
              </ul>

              {{-- 8. Ilícitos --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">8. Actos ilícitos y tolerancia cero</h3>
              <p class="mt-3">Orbana mantiene tolerancia cero ante:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Robo</li>
                <li>Extorsión</li>
                <li>Violencia</li>
                <li>Acoso sexual</li>
                <li>Uso de la plataforma para actividades ilegales</li>
              </ul>
              <p class="mt-3">Ante indicios fundados, Orbana podrá:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Suspender inmediatamente el acceso</li>
                <li>Colaborar con la central</li>
                <li>Proporcionar información a autoridades cuando sea legalmente requerido</li>
              </ul>

              {{-- 9. Intervención --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">9. Intervención de Orbana</h3>
              <p class="mt-3">Orbana podrá intervenir únicamente a nivel plataforma cuando:</p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Exista riesgo para usuarios o la central</li>
                <li>Se comprometa la seguridad del sistema</li>
                <li>Se violen estas políticas de forma reiterada</li>
              </ul>
              <p class="mt-3">
                Esta intervención no sustituye la autoridad ni las decisiones internas de la central.
              </p>

              {{-- 10. Aceptación --}}
              <h3 class="text-xl font-semibold text-slate-900 dark:text-white pt-4">10. Aceptación de las políticas</h3>
              <p class="mt-3">
                El uso continuo de Orbana Driver implica que el conductor:
              </p>
              <ul class="mt-2 ms-5 list-disc space-y-1">
                <li>Conoce estas políticas</li>
                <li>Las acepta</li>
                <li>Se compromete a cumplirlas como requisito de uso de la plataforma</li>
              </ul>

             

            </div>
          </div>

          {{-- FOOT NOTE --}}
          <div class="mt-10 text-sm text-slate-400 dark:text-slate-400">
            Nota: Estos documentos pueden actualizarse. El uso continuado de la Plataforma y/o Orbana Driver constituye aceptación de las versiones vigentes.
          </div>

        </div>
        {{-- /CARD --}}

      </div>
    </div>
  </div>
</section>

@endsection
