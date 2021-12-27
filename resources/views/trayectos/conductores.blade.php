@extends("layouts.app")



@section("contenido")
<script>
    $(document).ready(function() {
        $('#tabla_trayectos').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

    } );
    </script>
</head>
<body>
    
    <h3>{{$conductor->nombre}}</h3>

    @if(count($conductor->trayectos)>0)
        <a href=" {{url('/')}}" class="btn btn-primary">Inicio</a>
        <a href=" {{url('/conductores')}}" class="btn btn-primary">Volver</a>
        <table id="tabla_trayectos" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th data-orderable="false">ID</th>
                    <th data-orderable="false">CÓDIGO</th>
                    <th data-orderable="false">ORIGEN</th>
                    <th data-orderable="false">DESTINO</th>
                    <th data-orderable="false">FECHA</th>
                    <th data-orderable="false">HORA</th>
                    <th data-orderable="false">PASAJERO</th>

                </tr>
            </thead>
            <tbody>
                @foreach($conductor->trayectos as $trayecto)
                    <tr data-id='{{$trayecto->id}}'>
                        <td>{{$trayecto->id}}</td>
                        <td>{{$trayecto->codigo}}</td>
                        <td>{{$trayecto->origen}}</td>
                        <td>{{$trayecto->destino}}</td>
                        <td>{{$trayecto->fecha}}</td>
                        <td>{{$trayecto->hora}}</td>
                        <td>{{$trayecto->pasajeros->nombre}}</td>
                        @endforeach

                    </tr>

            </tbody>

        </table>
    @else
        <h1>No hay registros para este conductor</h1>
    @endif


@endsection