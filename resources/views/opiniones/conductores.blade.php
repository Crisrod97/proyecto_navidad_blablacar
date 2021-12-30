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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>Volver
                </a>
        @else
            <h1>No hay opiniones para este conductor</h1>
        @endif
@endsection