<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Uniandes') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      @if (Auth::user()->rol_id <= 2)
      <li class="nav-item{{ $activePage == 'eventos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('eventos') }}">
          <i class="material-icons">next_week</i>
            <p>{{ __('Eventos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'asistentes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('asistentes') }}">
          <i class="material-icons">how_to_reg</i>
            <p>{{ __('Asistencia') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'firmas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('firmas') }}">
          <i class="material-icons">create</i>
            <p>{{ __('firmas') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
            <i class="material-icons">supervisor_account</i>
          <p>{{ __('Configuración') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> P </span>
                <span class="sidebar-normal">{{ __('Perfil') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> AU </span>
                <span class="sidebar-normal"> {{ __('Administrar usuario') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'correo' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('correo') }}">
                <span class="sidebar-mini"> N </span>
                <span class="sidebar-normal"> {{ __('Notificaciones') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endif

      @if (Auth::user()->rol_id == 3)
      <li class="nav-item{{ $activePage == 'certificados' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('certificados') }}">
          <i class="material-icons">picture_as_pdf</i>
            <p>{{ __('Certificados') }}</p>
        </a>
      </li>
      @endif

    </ul>
  </div>
</div>
