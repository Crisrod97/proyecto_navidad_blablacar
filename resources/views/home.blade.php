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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                            </svg>
                        Conductores</a>
                        <a href="{{route('pasajeros.index')}}" class="btn btn-info">Pasajeros
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                            </svg>
                        </a>
                </div>
            </div>
    </div>
@endsection

