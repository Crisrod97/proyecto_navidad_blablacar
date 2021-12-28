@extends("layouts.app")



@section("contenido")

<script>
        $(".borrar").click(function(){
            const tr=$(this).closest("tr"); //guardamos el tr completo
            const id=tr.data("id");
            Swal.fire({
                title: '¿seguro que quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Borrar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url   : "{{url('/conductores')}}/"+id,
                        data  : {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    });
                } 
            })
        });
    </script>
    
</head>
<body>
    <div id="encabezado">
    
    <h1>Conductores</h1>

    @if(count($conductores)>0)
        <a href=" {{url('/')}}" class="btn btn-primary">Inicio</a>
        <a href=" {{url('/')}}" class="btn btn-primary">Volver</a>
        <a href=" {{url('/conductores/create')}}" class="btn btn-primary">Nuevo conductor</a><br><br>
        <a href="/conductorespdf">Descargar Informe sobre los conductores</a>
    </div>
        <table id="tabla_conductores" class="table table-striped table-bordered">
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
                    <th data-orderable="false">TRAYECTOS</th>
                    <th data-orderable="false">OPINIONES</th>
                    <th>EDITAR</th>
                    <th>BORRAR</th>
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
                        <td class="text-center"><a href="{{url('/trayectos')}}/{{$conductor->id}}">{{$conductor->trayectos->count()}}</a></td>
                        <td class="text-center"><a href="{{url('/opiniones_conductor')}}/{{$conductor->id}}">{{$conductor->opiniones->count()}}</a></td>
                        <td align="center"><a href="{{url('/conductores')}}/{{$conductor->id}}/edit"><button type="button" class="btn btn-info">Editar</button></a></td>
                        <td align="center"><a href="#" class='btn btn-danger borrar'>Borrar</a></td>
                    </tr>
                @endforeach
                
            </tbody>

        </table>
    @else
        <h1>No hay usuarios</h1>
    @endif


@endsection