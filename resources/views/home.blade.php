@extends("layouts.app")

@section("titulo")
    <title>SHARECAR</title>
@endsection


@section("contenido")
    <div class="home p-4 blockquote text-center">
        <h1>ShareCar</h1>
        <img src="https://static.vecteezy.com/system/resources/previews/003/223/621/non_2x/carsharing-service-line-icon-with-car-vector.jpg" class="rounded mx-auto d-block" alt="Responsive image" height="150px" weight="100px">
        <h3>Vehículos Compartidos</h3>
        <div class="relative flex items-top justify-center">
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <a href="{{route('conductores.index')}}"class="btn btn-info">
                            <i class="bi bi-caret-left-fill"></i>
                        Conductores</a>
                        <a href="{{route('pasajeros.index')}}" class="btn btn-info">Pasajeros
                            <i class="bi bi-caret-right-fill"></i>
                        </a>
                </div>
            </div>
    </div>
@endsection

