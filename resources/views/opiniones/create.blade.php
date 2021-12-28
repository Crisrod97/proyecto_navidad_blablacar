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
<h3>Registro de nueva opinión</h3>
</div>
<form action="{{route('opiniones.store')}}" method="post">
    @csrf
    <div class="form-group">
    <label for="conductor_id">CONDUCTOR </label><br>
    <select name="conductor_id">
            @foreach($conductores as $conductor )
              <option value="{{$conductor->id}}">{{$conductor->id}} - {{$conductor->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
    <label for="pasajero_id">PASAJERO</label><br>
    <select name="pasajero_id">
            @foreach($pasajeros as $pasajero )
              <option value="{{$pasajero->id}}">{{$pasajero->id}} - {{$pasajero->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="opinion">Opinión</label>
        <input type="text" class="form-control" id="opinion" name="opinion" placeholder="opinion" value="{{old('opinion')}}">
    </div>
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{old('fecha')}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/')}}" class="btn btn-secondary">Volver</a>
</form>

@endsection