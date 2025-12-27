{{-- resources/views/layouts/public_tw.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title','Orbana')</title>
  <meta name="description" content="@yield('meta_description', 'Orbana — Plataforma de despacho y gestión para taxis')">

  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  {{-- CSS libs (tema) --}}
  <link rel="stylesheet" href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}">

  {{-- Animations (DEBE ir en head) --}}
  <link rel="stylesheet" href="{{ asset('assets/libs/animate.css/animate.min.css') }}">

  {{-- Tailwind del tema --}}
  <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

  <style>
    #topnav { z-index: 50; }
    #topnav .container { padding-top: 0; padding-bottom: 0; }

    #topnav .nav-inner{
      min-height: 72px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:14px;
    }

    #topnav a.logo{
      display:inline-flex;
      align-items:center;
      padding: 6px 0;
      line-height:1;
    }

    #topnav a.logo img{
      height:28px !important;
      width:auto !important;
      display:block;
      object-fit:contain;
    }

    @media (max-width: 640px){
      #topnav .nav-inner{ min-height:64px; }
      #topnav a.logo img{ height:24px !important; }
    }

    #navigation { flex: 1; }
    #navigation .navigation-menu{ justify-content:flex-end; }

    #back-to-top{ z-index:60; }

    .bg-primary{ background-color:#121414; }

    /* NAV: siempre dark (si quieres) */
    #topnav.defaultscroll.is-sticky{
      background:#0f172a; /* slate-900 */
      box-shadow: 0 0 3px rgb(0 0 0 / 0.18);
    }
    #topnav .navigation-menu > li > a{ color:#fff !important; }
    #topnav .navigation-menu > li:hover > a,
    #topnav .navigation-menu > li.active > a{ color: var(--color-primary) !important; }

    /* Toggle compatible (open/active) */
    #navigation.open,
    #navigation.active{ display:block; }
  </style>

  @stack('styles')
</head>

<body class="font-nunito text-base text-slate-900 dark:text-white dark:bg-slate-900">

  {{-- TopNav --}}
  <nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
      <div class="nav-inner">

        {{-- Logo (light/dark) --}}
        <a class="logo" href="{{ route('landing') }}" aria-label="Orbana">
          <img src="{{ asset('images/orbana-logo-dark.png') }}" alt="Orbana" class="block dark:hidden" loading="lazy">
          
        </a>

        {{-- Mobile toggle --}}
        <div class="menu-extras">
          <div class="menu-item">
            <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
              <div class="lines">
                <span></span><span></span><span></span>
              </div>
            </a>
          </div>
        </div>

      {{-- Menú --}}
<div id="navigation">
  <ul class="navigation-menu nav-light nav-right !justify-end">
    @php
      // Landing: menú de secciones
      // Interiores: menú de regreso
      $navMode = request()->routeIs('landing') ? 'landing' : 'inner';
    @endphp

    @include('partials.public.nav', ['navMode' => $navMode])
  </ul>
</div>


      </div>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('partials.public.footer_tw')

  {{-- Back to top --}}
  <a href="#" onclick="topFunction()" id="back-to-top"
     class="back-to-top fixed hidden text-lg rounded-full bottom-5 end-5 size-9 text-center bg-primary text-white leading-9">
    <i class="uil uil-arrow-up"></i>
  </a>

  {{-- JS libs (tema) --}}
  <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
  <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>

  {{-- WOW --}}
  <script src="{{ asset('assets/libs/wow.js/wow.min.js') }}"></script>

  {{-- Init --}}
  <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  <script>
    if (window.feather) feather.replace();

    // Toggle compatible con variantes del theme
    window.toggleMenu = window.toggleMenu || function () {
      const nav = document.getElementById('navigation');
      const tgl = document.getElementById('isToggle');
      if (nav) { nav.classList.toggle('open'); nav.classList.toggle('active'); }
      if (tgl) tgl.classList.toggle('open');
    };

    window.addEventListener('load', function () {
      if (window.WOW) new WOW({ mobile: true, live: false }).init();
    });
  </script>

  @stack('scripts')
</body>
</html>
