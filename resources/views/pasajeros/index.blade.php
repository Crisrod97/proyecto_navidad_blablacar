@extends("layouts.app")

@section("titulo")
    <title>ShareCar - Pasajeros</title>

    <script>
            $(document).ready(function() {
                $('#tabla_pasajeros').DataTable( {
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    }
                });

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
            } );
    </script>
@endsection

@section("contenido")

    <div id="encabezado">
    <h1>Pasajeros</h1>

    @if(count($pasajeros)>0)
        <a href="/pasajerospdf" class="btn btn-info">Descargar Informe</a><br><br>
        </div>
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
                    <th>EDITAR</th>
                    <th>BORRAR</th>
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
                        <td align="center">
                            <a href="{{url('/pasajeros')}}/{{$pasajero->id}}/edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td align="center">
                            <a href="#" class='borrar'>
                                <i class="bi bi-trash2-fill"></i>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay registros para pasajeros</h1>
    @endif
@endsection