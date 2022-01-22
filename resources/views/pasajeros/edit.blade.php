@extends("layouts.app")

@section("titulo")
    <title>ShareCar - PasajeroEditar</title>
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
        <h1>{{$pasajero->nombre}}</h1>
        <h3>Editar</h3>
    </div>

    <div id="formulario" class="d-flex justify-content-center align-items-center">
    <form action="{{url('/pasajeros/')}}/{{$pasajero->id}}" method="post">
        @csrf
        @method("PUT")
        
        <div class="form-group mt-3 p-0">
          <fieldset disabled="">
            <label class="form-label" for="disabledInput">Identificador</label>
            <input class="form-control" id="id" type="text" placeholder="identificador" value="{{$pasajero->id}}" disabled="">
          </fieldset>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$pasajero->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$pasajero->apellidos}}">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{$pasajero->dni}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$pasajero->f_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$pasajero->telefono}}">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$pasajero->email}}">
        </div>
        <button type="submit" class="btn btn-primary mb-3">
        <i class="bi bi-send-check-fill"></i>
        </button>
        <a href="{{url('/pasajeros')}}" class="btn btn-secondary mb-3">
            <i class="bi bi-x-lg"></i>
        </a>
    </form>
    </div>
@endsection