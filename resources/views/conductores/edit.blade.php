@extends("layouts.app")

@section("titulo")
    <title>ShareCar - EditarConductor</title>
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
        <h1>{{$conductor->nombre}}</h1>
        <h3>Editar</h3>
    </div>

    <div id="formulario" class="d-flex justify-content-center align-items-center">
    
    <form action="{{url('/conductores/')}}/{{$conductor->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group mt-3 p-0">
          <fieldset disabled="">
            <label class="form-label" for="disabledInput">Identificador</label>
            <input class="form-control" id="id" type="text" placeholder="identificador" value="{{$conductor->id}}" disabled="">
          </fieldset>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$conductor->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$conductor->apellidos}}">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{$conductor->dni}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$conductor->f_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$conductor->telefono}}">
        </div>
        <div class="form-group">
            <label for="modelo_coche">Modelo de vehículo</label>
            <input type="text" class="form-control" id="modelo_coche" name="modelo_coche" placeholder="Modelo de vehículo" value="{{$conductor->modelo_coche}}">
        </div>
        <div class="form-group">
            <label for="modelo_coche">Modelo de vehículo</label>
            <input type="text" class="form-control" id="modelo_coche" name="modelo_coche" placeholder="Modelo de vehículo" value="{{$conductor->modelo_coche}}">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$conductor->email}}">
        </div>
        <button type="submit" class="btn btn-primary mb-5">
            <i class="bi bi-send-check-fill"></i>
        </button>
        <a href="{{url('/conductores')}}" class="btn btn-secondary mb-5">
            <i class="bi bi-x-lg"></i>
        </a>
    </form>
    </div>
@endsection