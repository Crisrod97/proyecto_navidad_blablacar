@extends("layouts.app")


@section("contenido")

<div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0" style="background-color: white">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Iniciar sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

<div>
        <h1 align="center">Gestor Administrativo</h1>
</div>
                <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
                    Gestión del Aeropuerto de Lanzarote
                </h2>
                <p class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                    En esta aplicación es una herramienta para la gestión de los vuelos, pilotos y sus viajes
                </p>
                <a class="btn btn-success" href="{{route('conductores.index')}}">Conductores</a>
                <a class="btn btn-success" href="{{route('pasajeros.index')}}">Pasajeros</a>
                <a href=" {{url('/opiniones/create')}}" class="btn btn-primary">Crear opinion</a>
            </div>
        </div>
    </div>

</body>

</html>

@endsection
