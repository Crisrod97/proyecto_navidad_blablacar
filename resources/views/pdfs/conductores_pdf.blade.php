@extends("layouts.pdf")

@section("contenido")
    <img src="https://static.vecteezy.com/system/resources/previews/003/223/621/non_2x/carsharing-service-line-icon-with-car-vector.jpg" class="rounded mx-auto d-block" alt="Responsive image" height="100px" weight="100px">
    <h6>ShareCar</h6>
    <h1>Listado de conductores</h1>

    @if(count($conductores)>0)
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
                    <th data-orderable="false">MODELO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conductores as $conductor)
                        <tr data-id='{{$conductor->id}}'>
                            <td>{{$conductor->id}}</td>
                            <td>{{$conductor->nombre}}</td>
                            <td>{{$conductor->apellidos}}</td>
                            <td>{{$conductor->f_nacimiento}}</td>
                            <td>{{$conductor->email}}</td>
                            <td>{{$conductor->dni}}</td>
                            <td>{{$conductor->telefono}}</td>
                            <td>{{$conductor->modelo_coche}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No existe registros para conductores</h1>
    @endif
@endsection