@extends("layouts.app")



@section("contenido")
<script>
    $(document).ready(function() {
        $('#tabla_opiniones').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

    } );
    </script>
</head>
<body>
    
    <h3>{{$conductor->nombre}}</h3>

    @if(count($conductor->opiniones)>0)
        <a href=" {{url('/')}}" class="btn btn-primary">Inicio</a>
        <a href=" {{url('/conductores')}}" class="btn btn-primary">Volver</a>
        <table id="tabla_opiniones" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th data-orderable="false">CÓDIGO OPINIÓN</th>
                    <th data-orderable="false">PASAJERO</th>
                    <th>OPINION</th>
                    <th>FECHA</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conductor->opiniones as $opinion)
                    <tr data-id='{{$opinion->id}}'>
                        <td>{{$opinion->id}}</td>
                        <td>{{$opinion->pasajero_id}}</td>
                        <td>{{$opinion->opinion}}</td>
                        <td>{{$opinion->fecha}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay opiniones para este conductor</h1>
    @endif


@endsection