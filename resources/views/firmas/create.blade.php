@extends('layouts.app', ['activePage' => 'firmas', 'titlePage' => __('Firmas')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('firmas.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Añadir firma') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('firmas') }}" class="btn btn-sm btn-primary">{{ __('Volver a la lista') }}</a>
                  </div>
                </div>
                @if ($errors->any())
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        @foreach ($errors->all() as $error)
                          <span>{{ $error }}</span>
                        @endforeach
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" id="input-nombre" type="text" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required="true" aria-required="true"/>
                      @if ($errors->has('nombre'))
                        <span id="nombre-error" class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Area') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
                         <input class="form-control{{ $errors->has('area') ? ' is-invalid' : '' }}" input type="text" name="area" id="input-area" placeholder="{{ __('Area') }}" value="{{ old('area') }}"  required/>
                      @if ($errors->has('area'))
                        <span id="area-error" class="error text-danger" for="input-area">{{ $errors->first('area') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-cargo">{{ __('Cargo') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('cargo') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}" input type="text" name="cargo" id="input-cargo" placeholder="{{ __('Cargo') }}" value="{{ old('cargo') }}"  required/>
                      @if ($errors->has('cargo'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('cargo') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-imagen">{{ __('Firma') }}</label>
                  <div class="col-sm-7">
                    <div class="form-control-file">
                      <input class="form-control-file" name="imagen" id="input-imagen" type="file" required value="{{ old('imagen') }}"/>
                    </div>
                  </div>
                </div>  <br>




                </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Añadir firma') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
