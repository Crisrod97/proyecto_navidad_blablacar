@extends("layouts.app")


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
    <h1>Pasajero</h1>
<h3>Registro de nuevo usuario</h3>
    </div>
<form action="{{route('pasajeros.store')}}" method="post">
    @csrf

    <div class="form-group">
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
    <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{old('email')}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/pasajeros')}}" class="btn btn-secondary">Volver</a>
</form>

@endsection