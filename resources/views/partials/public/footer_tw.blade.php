{{-- resources/views/partials/public/footer_tw.blade.php --}}
<footer class="relative bg-slate-900 dark:bg-slate-800 text-gray-200">
  <div class="container relative">
    <div class="py-[60px] px-0">
      <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">

        {{-- Brand --}}
        <div class="lg:col-span-4 md:col-span-12">
          <a href="{{ url('/') }}" class="text-[22px] focus:outline-none inline-flex items-center gap-3">
            <img src="{{ asset('images/orbana-logo-light.png') }}" class="h-10 w-auto" alt="Orbana" loading="lazy">
          </a>

          <p class="mt-6 text-gray-300">
            Despacho y operación de taxis en tiempo real: mapa vivo, asignación transparente,
            apps para conductores y reportes para mejorar la productividad de tu central.
          </p>

          <div class="mt-6 flex flex-wrap gap-2">
            <a href="https://wa.me/52{{ preg_replace('/\D/','', '2831322595') }}"
               target="_blank" rel="noopener"
               class="h-10 px-4 inline-flex items-center justify-center gap-2 border border-gray-700 text-gray-200 rounded-md hover:border-primary hover:bg-primary duration-500">
              <i class="uil uil-whatsapp"></i>
              <span>WhatsApp</span>
            </a>

            <a href="https://orbana.mx" target="_blank" rel="noopener"
               class="h-10 px-4 inline-flex items-center justify-center gap-2 border border-gray-700 text-gray-200 rounded-md hover:border-primary hover:bg-primary duration-500">
              <i class="uil uil-globe"></i>
              <span>orbana.mx</span>
            </a>
          </div>
        </div>

        {{-- Producto --}}
        <div class="lg:col-span-2 md:col-span-4">
          <h5 class="tracking-[1px] text-gray-100 font-semibold">Producto</h5>
          <ul class="list-none mt-6 space-y-2">
            <li>
              <a href="{{ url('/#servicios') }}" class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> Servicios
              </a>
            </li>
            <li>
              <a href="{{ url('/#pricing') }}" class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> Precio
              </a>
            </li>
            <li>
              <a href="{{ url('/#faq') }}" class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> FAQ
              </a>
            </li>
            <li>
              <a href="{{ url('/#contacto') }}" class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> Contacto
              </a>
            </li>
          </ul>
        </div>

        {{-- Soluciones --}}
        <div class="lg:col-span-3 md:col-span-4">
          <h5 class="tracking-[1px] text-gray-100 font-semibold">Soluciones</h5>
          <ul class="list-none mt-6 space-y-2">
            <li>
              <a href="{{ Route::has('public.dispatch') ? route('public.dispatch') : url('/despacho') }}"
                 class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> Despacho (panel)
              </a>
            </li>
            <li>
              <a href="{{ Route::has('public.driver') ? route('public.driver') : url('/app-driver') }}"
                 class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> App Driver
              </a>
            </li>
           
          </ul>
        </div>

        {{-- Legal --}}
        <div class="lg:col-span-3 md:col-span-4">
          <h5 class="tracking-[1px] text-gray-100 font-semibold">Legal</h5>

          <ul class="list-none mt-6 space-y-2">
            <li>
              <a href="{{ Route::has('public.terms') ? route('public.terms') : url('/terminos') }}"
                 class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> Términos y condiciones
              </a>
            </li>
            <li>
              <a href="{{ Route::has('public.privacy') ? route('public.privacy') : url('/privacidad') }}"
                 class="text-gray-300 hover:text-gray-200 duration-500 ease-in-out">
                <i class="uil uil-angle-right-b"></i> Aviso de privacidad
              </a>
            </li>
          </ul>

          <div class="mt-6 rounded-md border border-gray-700 bg-slate-900/30 p-4">
            <div class="text-gray-100 font-semibold">Soporte</div>
            <div class="text-gray-300 text-sm mt-1">
              WhatsApp:
              <a class="hover:text-white underline underline-offset-4"
                 href="https://wa.me/52{{ preg_replace('/\D/','', '2831322595') }}"
                 target="_blank" rel="noopener">+52 283 132 2595</a>
            </div>
            <div class="text-gray-300 text-sm mt-1">
              Sitio:
              <a class="hover:text-white underline underline-offset-4"
                 href="https://orbana.mx" target="_blank" rel="noopener">orbana.mx</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-gray-700">
      <div class="py-6 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
        <div class="text-gray-400 text-sm">
          © {{ date('Y') }} Orbana. Todos los derechos reservados.
        </div>

        <div class="flex flex-wrap gap-4 text-sm">
          <a href="{{ Route::has('public.terms') ? route('public.terms') : url('/terminos') }}"
             class="text-gray-400 hover:text-gray-200 duration-500">Términos</a>

          <a href="{{ Route::has('public.privacy') ? route('public.privacy') : url('/privacidad') }}"
             class="text-gray-400 hover:text-gray-200 duration-500">Privacidad</a>

          <a href="{{ Route::has('public.driver') ? route('public.driver') : url('/app-driver') }}"
             class="text-gray-400 hover:text-gray-200 duration-500">App Driver</a>

          <a href="{{ Route::has('public.dispatch') ? route('public.dispatch') : url('/despacho') }}"
             class="text-gray-400 hover:text-gray-200 duration-500">Despacho</a>
        </div>
      </div>
    </div>

  </div>
</footer>
