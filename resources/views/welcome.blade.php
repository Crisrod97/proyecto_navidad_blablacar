@extends("layouts.app_welcome")

@section("titulo")
    <title>SHARECAR</title>
@endsection


@section("contenido")
    <div class="home p-4 blockquote text-center">
        <h1>ShareCar</h1>
        <img src="https://static.vecteezy.com/system/resources/previews/003/223/621/non_2x/carsharing-service-line-icon-with-car-vector.jpg" class="rounded mx-auto d-block" alt="Responsive image" height="150px" weight="100px">
        <h3 style="color:white">Vehículos Compartidos</h3>
        <p class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400" style="color:white">Bienvenido a la nueva aplicación web ShareCar, la nueva forma de conectar Lanzarote</p>
        <div class="relative flex items-top justify-center">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-info">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-info">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-info">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
    </div>
@endsection
