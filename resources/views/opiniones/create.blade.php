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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check" viewBox="0 0 16 16">
                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
            </svg>
        </button>
        <a href="{{url('/')}}" class="btn btn-secondary mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
            </svg>
        </a>
    </form>
    
    </div>
@endsection