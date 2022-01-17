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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check" viewBox="0 0 16 16">
                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
            </svg>
        </button>
        <a href="{{url('/conductores')}}" class="btn btn-secondary mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
            </svg>
        </a>
    </form>
    </div>
@endsection