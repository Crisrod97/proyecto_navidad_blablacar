@extends("layouts.app")



@section("contenido")

<script>
    $(document).ready(function() {
        $('#tabla_pasajeros').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });
    } );
    </script>
    
</head>
<body>
    <h1>Pasajeros</h1>

    @if(count($pasajeros)>0)
        <a href=" {{url('/')}}" class="btn btn-primary">Inicio</a>
        <a href=" {{url('/')}}" class="btn btn-primary">Volver</a>
        <a href=" {{url('/pasajeros/create')}}" class="btn btn-primary">Nuevo pasajero</a><br><br>
        {{--<a href="/imprimirpdf">Imprimir</a>--}}
        <table id="tabla_pasajeros" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th data-orderable="false">ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th data-orderable="false">F.NACIMIENTO</th>
                    <th data-orderable="false">EDAD</th>
                    <th data-orderable="false">EMAIL</th>
                    <th data-orderable="false">DNI</th>
                    <th data-orderable="false">TELEFONO</th>
                    
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasajeros as $pasajero)
                    <tr data-id='{{$pasajero->id}}'>
                        <td>{{$pasajero->id}}</td>
                        <td>{{$pasajero->nombre}}</td>
                        <td>{{$pasajero->apellidos}}</td>
                        <td>{{$pasajero->f_nacimiento}}</td>
                        <td class="text-center">{{$pasajero->edad}}</td>
                        <td>{{$pasajero->email}}</td>
                        <td>{{$pasajero->dni}}</td>
                        <td>{{$pasajero->telefono}}</td>   
                        {{--<td class="text-center"><a href="{{url('/vuelos_piloto')}}/{{$piloto->id}}">{{$pasajero->vuelos->count()}}</a></td>--}}
                        <td align="center"><a href="{{url('/pasajeros')}}/{{$pasajero->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>
                        <td align="center"><a href="#" class='btn btn-danger borrar'>Borrar</a></td>

                    </tr>
                @endforeach
                <a href="/pasajerospdf">Descargar Informe sobre los pasajeros</a>
            </tbody>

        </table>
    @else
        <h1>No hay usuarios</h1>
    @endif


@endsection