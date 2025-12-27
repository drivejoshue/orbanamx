@php
  $navMode = $navMode ?? 'inner';
@endphp

@if($navMode === 'landing')
  {{-- Landing: navegación por secciones --}}
  <li><a href="#inicio" class="sub-menu-item">Inicio</a></li>
  <li><a href="#caracteristicas" class="sub-menu-item">Características</a></li>
  <li><a href="#apps" class="sub-menu-item">Apps</a></li>
  <li><a href="#servicios" class="sub-menu-item">Servicios</a></li>
  <li><a href="#faq" class="sub-menu-item">FAQ</a></li>


@else
  {{-- Interiores: SOLO regresar al landing --}}
  <li><a href="{{ route('landing') }}" class="sub-menu-item">← Volver al sitio</a></li>
  <li><a href="{{ route('landing') }}#contacto" class="sub-menu-item">Contacto</a></li>
@endif
