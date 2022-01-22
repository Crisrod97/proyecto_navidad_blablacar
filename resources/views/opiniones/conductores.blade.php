@extends("layouts.app")

@section("titulo")
    <title>ShareCar - OpinionesConductor</title>
@endsection

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

    <div id="encabezado">
        <h1>{{$conductor->nombre}}</h1>
    </div>
        @if(count($conductor->opiniones)>0)
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
                <a href="{{url('/conductores')}}" class="btn btn-secondary">
                    <i class="bi bi-arrow-return-left"></i>Volver
                </a>
        @else
            <h1>No hay opiniones para este conductor</h1>
        @endif
@endsection