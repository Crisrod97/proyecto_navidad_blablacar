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
                        {{--<td class="text-center"><a href="{{url('/vuelos_piloto')}}/{{$piloto->id}}">{{$piloto->vuelos->count()}}</a></td>--}}

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay conductores</h1>
    @endif


@endsection