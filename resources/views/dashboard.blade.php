@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Inicio')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        @if (Auth::user()->rol_id == 3)
        <div class="col-lg-3 col-md-6 col-sm-6">
          <a class="nav-link" href="{{ route('eventos') }}">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">picture_as_pdf</i>
              </div>
              <p class="card-category">{{ __('Administrar') }}</p>
              <h4 class="card-title">{{ __('Certificados') }}
              </h4>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
          </a>
        </div>
        @endif

        @if (Auth::user()->rol_id <= 2)
        <div class="col-lg-3 col-md-6 col-sm-6">
          <a class="nav-link" href="{{ route('eventos') }}">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">next_week</i>
              </div>
              <p class="card-category">{{ __('Administrar') }}</p>
              <h4 class="card-title">{{ __('Eventos') }}
              </h4>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <a class="nav-link" href="{{ route('asistentes') }}">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">how_to_reg</i>
              </div>
              <p class="card-category">{{ __('Administrar') }}</p>
              <h4 class="card-title">{{ __('Asistencia') }}
              </h4>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
        </a>
        </div>
        @endif


      </div>
    </div>
  </div>
@endsection
