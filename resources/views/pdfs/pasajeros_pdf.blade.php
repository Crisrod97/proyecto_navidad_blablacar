@extends("layouts.app")



@section("contenido")
<style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 10px;
            border: 0px solid greenyellow;
            margin: 5px;
            padding: 4px;
            border-radius: 5px
        }
    </style>   
</head>
<body>
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

                        {{--<td class="text-center"><a href="{{url('/vuelos_piloto')}}/{{$piloto->id}}">{{$piloto->vuelos->count()}}</a></td>--}}

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay pasajeros</h1>
    @endif


@endsection