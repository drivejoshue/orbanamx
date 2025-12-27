{{-- resources/views/public/terms/passenger.blade.php --}}
@extends('layouts.public_tw')

@section('title', 'Términos y Condiciones · Orbana Passenger')
@section('meta_description', 'Términos y Condiciones del servicio para Pasajeros (Orbana Passenger): uso legítimo, cancelaciones, solicitudes falsas, seguridad, reportes y suspensión de cuenta.')

@section('content')
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-900">
  <div class="container relative">

    {{-- Header --}}
    <div class="grid grid-cols-1 pb-8 text-center">
      <h1 class="mb-4 md:text-4xl text-3xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">
        Términos y Condiciones del Servicio
        <span class="block text-primary mt-1">Orbana Passenger (Pasajeros)</span>
      </h1>

      <p class="text-slate-500 dark:text-slate-300 max-w-3xl mx-auto">
        Última actualización: <span class="font-medium">[fecha]</span>
      </p>
    </div>

    {{-- Card --}}
    <div class="grid grid-cols-1">
      <div class="rounded-2xl bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 border border-gray-100 dark:border-gray-800 overflow-hidden">

        {{-- Top bar --}}
        <div class="px-6 py-5 border-b border-gray-100 dark:border-gray-800 bg-white/60 dark:bg-slate-900/60">
          <p class="text-slate-600 dark:text-slate-300">
            Estos Términos y Condiciones (“Términos”) constituyen un acuerdo legalmente vinculante entre usted (“Pasajero”, “usted”)
            y <strong class="text-slate-900 dark:text-white">Orbana</strong> (“Orbana”, “nosotros”), respecto al acceso y uso de la
            aplicación móvil <strong class="text-slate-900 dark:text-white">Orbana Passenger</strong>, APIs y servicios asociados (la “Plataforma”).
          </p>
          <p class="text-slate-600 dark:text-slate-300 mt-3">
            Al usar la Plataforma, usted declara que ha leído, comprendido y aceptado estos Términos. Si no está de acuerdo,
            debe dejar de utilizar la Plataforma.
          </p>
        </div>

        {{-- Body --}}
        <div class="p-6 md:p-8">
          {{-- TOC --}}
          <div class="rounded-xl bg-gray-50 dark:bg-slate-800/60 border border-gray-100 dark:border-gray-700 p-5 mb-8">
            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">Contenido</h3>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-2 text-sm">
              <a class="text-primary hover:underline" href="#s1">1. Naturaleza del servicio</a>
              <a class="text-primary hover:underline" href="#s2">2. Elegibilidad y cuenta</a>
              <a class="text-primary hover:underline" href="#s3">3. Información veraz y uso legítimo</a>
              <a class="text-primary hover:underline" href="#s4">4. Solicitudes, cancelaciones y solicitudes falsas</a>
              <a class="text-primary hover:underline" href="#s5">5. Conducta del pasajero y seguridad</a>
              <a class="text-primary hover:underline" href="#s6">6. Pagos, tarifas y reembolsos (si aplica)</a>
              <a class="text-primary hover:underline" href="#s7">7. Reportes, quejas e incidencias</a>
              <a class="text-primary hover:underline" href="#s8">8. Datos, privacidad y permisos</a>
              <a class="text-primary hover:underline" href="#s9">9. Disponibilidad y servicios de terceros</a>
              <a class="text-primary hover:underline" href="#s10">10. Suspensión, baja y terminación</a>
              <a class="text-primary hover:underline" href="#s11">11. Exención de garantías y responsabilidad</a>
              <a class="text-primary hover:underline" href="#s12">12. Modificaciones</a>
              <a class="text-primary hover:underline" href="#s13">13. Legislación y jurisdicción</a>
              <a class="text-primary hover:underline" href="#accept">Texto corto para checkbox</a>
            </div>
          </div>

          {{-- Sections --}}
          <div class="prose prose-slate dark:prose-invert max-w-none prose-headings:scroll-mt-24">
            <h2 id="s1">1. Naturaleza del servicio (plataforma tecnológica)</h2>
            <p>
              Orbana proporciona una <strong>plataforma tecnológica</strong> que facilita la solicitud y gestión de viajes con
              conductores y/o centrales de transporte afiliadas.
            </p>
            <ul>
              <li>Orbana <strong>no presta servicios de transporte</strong>, no actúa como empresa transportista y no garantiza la disponibilidad de conductores.</li>
              <li>El servicio de transporte (si llega a concretarse) se realiza <strong>directamente</strong> entre el Pasajero y el Conductor y/o la Central, quienes son responsables del servicio prestado.</li>
              <li>Orbana no asume responsabilidad por accidentes, retrasos, cancelaciones, pérdida de objetos, conductas de terceros o disputas por tarifas, sin perjuicio de las medidas de plataforma descritas en estos Términos.</li>
            </ul>

            <h2 id="s2">2. Elegibilidad y cuenta de usuario</h2>
            <ul>
              <li>Usted debe contar con capacidad legal para aceptar estos Términos y proporcionar información veraz.</li>
              <li>Usted es responsable de mantener la seguridad de su cuenta (incluido el acceso a su teléfono y credenciales).</li>
              <li>Orbana puede solicitar verificación adicional si detecta riesgos, fraude o inconsistencias.</li>
            </ul>

            <h2 id="s3">3. Información veraz y uso legítimo</h2>
            <p>Usted se compromete a:</p>
            <ul>
              <li>Proporcionar datos <strong>reales y actualizados</strong> (nombre, teléfono y cualquier dato requerido por la app).</li>
              <li>No suplantar identidades ni crear cuentas falsas.</li>
              <li>No usar la Plataforma para fines ilícitos o para dañar a terceros.</li>
              <li>No manipular el sistema (automatizaciones no autorizadas, ingeniería inversa o abuso del flujo de solicitudes).</li>
            </ul>
            <p>
              Orbana podrá <strong>limitar, suspender o dar de baja</strong> cuentas con información falsa o uso indebido.
            </p>

            <h2 id="s4">4. Solicitudes de viaje, cancelaciones y solicitudes falsas</h2>
            <ul>
              <li>Al solicitar un viaje, usted debe hacerlo con intención real de tomarlo y proporcionar ubicaciones razonables de origen/destino.</li>
              <li><strong>Cancelaciones repetidas</strong>, solicitudes falsas o patrones anómalos (por ejemplo, pedir viajes sin intención de abordar, bromas o “spameo” de solicitudes) pueden afectar el acceso a la Plataforma.</li>
            </ul>
            <p>Orbana puede, a nivel plataforma:</p>
            <ul>
              <li>Aplicar restricciones temporales (por ejemplo, limitar nuevas solicitudes por un periodo).</li>
              <li>Solicitar verificación adicional.</li>
              <li>Suspender o dar de baja la cuenta en casos graves o reiterados.</li>
            </ul>
            <p>
              Si la Central aplica reglas adicionales (por ejemplo, cargos por cancelación, ventanas de espera o políticas de no-show),
              dichas reglas pueden comunicarse en la app o por la Central, y aplicarán en su relación con la Central/conductor.
            </p>

            <h2 id="s5">5. Conducta del pasajero y seguridad</h2>
            <p>Usted se obliga a mantener una conducta respetuosa y segura:</p>
            <ul>
              <li>Trato profesional, sin agresiones, amenazas, discriminación o acoso.</li>
              <li>No poner en riesgo al conductor, a terceros ni al propio servicio.</li>
              <li>No solicitar acciones ilegales o peligrosas.</li>
            </ul>
            <p><strong>Tolerancia cero:</strong> Ante indicios razonables de violencia, acoso, robo, extorsión o cualquier ilícito, Orbana podrá suspender de inmediato la cuenta, preservar evidencia digital (logs y eventos) y colaborar con la Central y/o autoridades cuando sea legalmente requerido.</p>

            <h2 id="s6">6. Pagos, tarifas y reembolsos (si aplica)</h2>
            <ul>
              <li>Orbana puede mostrar estimaciones de tarifa, pero la tarifa final puede depender de la Central y/o acuerdos con el conductor, así como de condiciones de ruta/tiempo.</li>
              <li>Orbana puede habilitar integraciones con pasarelas de pago; la gestión de cobros, devoluciones y disputas puede estar sujeta a políticas de la Central y del proveedor de pago.</li>
              <li>Orbana no garantiza reembolsos; los casos se evaluarán cuando aplique y según evidencia disponible.</li>
            </ul>

            <h2 id="s7">7. Reportes, quejas e incidencias</h2>
            <ul>
              <li>Usted puede reportar incidencias relevantes (mal servicio, conducta inapropiada, conflicto de tarifa, etc.).</li>
              <li>Orbana puede registrar incidencias y evidencia digital (timestamps, eventos y señales de uso), y canalizar reportes a la Central cuando corresponda.</li>
            </ul>

            <h2 id="s8">8. Datos, privacidad y permisos</h2>
            <ul>
              <li>La app puede requerir permisos (ubicación, notificaciones, etc.) para operar correctamente.</li>
              <li>Orbana procesa datos para operación, seguridad, prevención de fraude y mejora del servicio.</li>
              <li>El tratamiento de datos se rige por la <strong>Política de Privacidad</strong> de Orbana, incorporada por referencia.</li>
            </ul>

            <h2 id="s9">9. Disponibilidad, fallas y servicios de terceros</h2>
            <ul>
              <li>La Plataforma se ofrece “tal cual” y puede presentar interrupciones o fallas.</li>
              <li>Orbana no es responsable por fallas de terceros: telecomunicaciones, mapas, notificaciones push, pasarelas de pago, sistemas operativos o tiendas de apps.</li>
            </ul>

            <h2 id="s10">10. Suspensión, baja y terminación</h2>
            <p>Orbana podrá suspender o cancelar el acceso del Pasajero cuando:</p>
            <ul>
              <li>Exista incumplimiento de estos Términos.</li>
              <li>Se detecte fraude, solicitudes falsas o abuso reiterado.</li>
              <li>Se comprometa la seguridad de conductores, centrales o la Plataforma.</li>
              <li>Se requiera por orden legal o autoridad competente.</li>
            </ul>

            <h2 id="s11">11. Exención de garantías y limitación de responsabilidad</h2>
            <ul>
              <li>Orbana no garantiza disponibilidad continua, ni que siempre existan conductores disponibles.</li>
              <li>En la medida permitida por la ley, Orbana no será responsable por daños indirectos, pérdida de datos, lucro cesante o reclamaciones derivadas del servicio de transporte prestado por terceros.</li>
            </ul>

            <h2 id="s12">12. Modificaciones de los términos</h2>
            <p>Orbana podrá actualizar estos Términos. El uso continuado de la Plataforma constituye aceptación de la versión vigente.</p>

            <h2 id="s13">13. Legislación aplicable y jurisdicción</h2>
            <p>
              Estos Términos se rigen por las leyes de los Estados Unidos Mexicanos.
              Cualquier controversia se someterá a los tribunales competentes del domicilio de Orbana, salvo disposición legal distinta.
            </p>

            <h2 id="accept">Texto corto para mostrar en la app (checkbox)</h2>
            <div class="not-prose rounded-xl border border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-slate-800/60 p-5">
              <p class="text-slate-700 dark:text-slate-200">
                “Declaro que he leído y acepto los Términos y Condiciones de Orbana Passenger. Entiendo que Orbana es una plataforma tecnológica
                y que el servicio de transporte es prestado por terceros (central y/o conductor).”
              </p>
            </div>
          </div>

          {{-- Footer actions --}}
          <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ url()->previous() }}"
               class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center
                      bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800
                      border-gray-200 dark:border-gray-700 text-slate-900 dark:text-white rounded-md">
              Volver
            </a>

            <a href="{{ route('landing') }}#contacto"
               class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center
                      bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">
              Contacto <i class="uil uil-arrow-right"></i>
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>
@endsection
