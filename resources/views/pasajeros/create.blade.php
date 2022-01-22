@extends("layouts.app")

@section("titulo")
    <title>ShareCar - PasajeroCrear</title>
@endsection

@section("contenido")

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="encabezado">
    <h1>Registro de nuevo pasajero</h1>
    </div>

    <div id="formulario" class="d-flex justify-content-center align-items-center">
    <form action="{{route('pasajeros.store')}}" method="post">
        @csrf
        <div class="form-group mt-3 p-0">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{old('nombre')}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{old('apellidos')}}">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{old('dni')}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{old('f_nacimiento')}}">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{old('telefono')}}">
        </div>

        <label class="form-group">Correo electrónico</label>
        <div class="form-row align-items-center"> 
        <div class="col-auto mb-5">
          <label class="sr-only" for="inlineFormInput">ejemplo</label>
          <input type="text" class="form-control" id="inlineFormInput" placeholder="ejemplo">
        </div>
        
        <div class="col-auto mb-5">
          <label class="sr-only" for="inlineFormInputGroup">ejemplo.com</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="email" name="email" placeholder="ejemplo.com">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mb-5">
            <i class="bi bi-send-check-fill"></i>
        </button>
        <a href="{{url('/pasajeros')}}" class="btn btn-secondary mb-5">
            <i class="bi bi-x-lg"></i>
        </a>
    </form>
    </div>
@endsection