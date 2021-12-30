@extends("layouts.pdf")

@section("contenido")
    <img src="https://static.vecteezy.com/system/resources/previews/003/223/621/non_2x/carsharing-service-line-icon-with-car-vector.jpg" class="rounded mx-auto d-block" alt="Responsive image" height="100px" weight="100px">
    <h6>ShareCar</h6>
    <h1>Listado de pasajeros</h1>

    @if(count($pasajeros)>0)
        <table id="tabla_vuelos" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th data-orderable="false">ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th data-orderable="false">F.NACIMIENTO</th>
                    <th data-orderable="false">EMAIL</th>
                    <th data-orderable="false">DNI</th>
                    <th data-orderable="false">TELEFONO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasajeros as $pasajero)
                    <tr data-id='{{$pasajero->id}}'>
                        <td>{{$pasajero->id}}</td>
                        <td>{{$pasajero->nombre}}</td>
                        <td>{{$pasajero->apellidos}}</td>
                        <td>{{$pasajero->f_nacimiento}}</td>
                        <td>{{$pasajero->email}}</td>
                        <td>{{$pasajero->dni}}</td>
                        <td>{{$pasajero->telefono}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No existen registros para pasajeros</h1>
    @endif

@endsection