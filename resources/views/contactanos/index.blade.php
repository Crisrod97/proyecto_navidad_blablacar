@extends("layouts.app")

@section("titulo")
    <title>ShareCar - Contacto</title>
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
    <h1>Formulario de contacto</h1>
    </div>
    
    <div id="formulario" class="d-flex justify-content-center align-items-center">
    <form action="{{route('contactanos.store')}}" method="post">
        @csrf
        <div class="form-group mt-3 p-0">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{old('apellidos')}}">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electrónico" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea type="text" class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Contenido del mensaje" value="{{old('mensaje')}}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">
            <i class="bi bi-send-check-fill"></i>
        </button>
        <a href="{{url('/')}}" class="btn btn-secondary mb-5">
        <i class="bi bi-x-lg"></i>
        </a>
    </form>
    </div>
    
    @if (session('info'))         
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Correo de contacto enviado',
                showConfirmButton: false,
                timer: 1500
            })
        </script>     
    @endif

@endsection