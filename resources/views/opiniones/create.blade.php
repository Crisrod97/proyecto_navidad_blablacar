@extends("layouts.app")

@section("titulo")
    <title>ShareCar - OpinionesCrear</title>
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
        <h1>Registro de nueva opinión</h1>
    </div>

    <div id="formulario" class="d-flex justify-content-center align-items-center">
    
    <form action="{{route('opiniones.store')}}" method="post">
        @csrf
        <div class="form-group mt-3 p-0">
        <label for="exampleFormControlSelect1">Conductor </label><br>
        <select class="form-control" id="exampleFormControlSelect1" name="conductor_id">
                @foreach($conductores as $conductor )
                  <option value="{{$conductor->id}}">{{$conductor->id}} - {{$conductor->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
        <label for="exampleFormControlSelect1">Pasajero</label><br>
        <select class="form-control" id="exampleFormControlSelect1" >
                @foreach($pasajeros as $pasajero )
                  <option value="{{$pasajero->id}}">{{$pasajero->id}} - {{$pasajero->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Opinión</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="opinion" name="opinion" placeholder="Escriba aquí su opinión de máximo 250 caracteres" value="{{old('opinion')}}"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{old('fecha')}}">
        </div>   
        <button type="submit" class="btn btn-primary mb-5">
            <i class="bi bi-send-check-fill"></i>
        </button>
        <a href="{{url('/')}}" class="btn btn-secondary mb-5">
          <i class="bi bi-x-lg"></i>
        </a>
    </form>
    
    </div>
@endsection