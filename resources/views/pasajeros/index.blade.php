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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                        </td>
                        <td align="center">
                            <a href="#" class='borrar'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
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