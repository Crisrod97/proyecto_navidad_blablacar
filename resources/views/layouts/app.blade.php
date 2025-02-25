<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
          $(".informe").click(function(){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Informe en descarga',
                    showConfirmButton: false,
                    timer: 1500
                })
            });
        } );
    </script>
  <style>
          body {
              margin: 0px;
              padding: 0px;
              border-radius: 20px;
              background-image: url("https://images.unsplash.com/photo-1490032451070-c427f59f18b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80");
              background-size: 100%;
              background-repeat: no-repeat;
              background-size: cover;
              background-attachment: fixed; 
          }
          .form-group{
            width:auto;
            color: black;
            font-weight: bold;
            font-size: 20px;
          }

          #formulario{
              width:50%;
              margin:auto;
              background-color: rgb(255, 255, 255, 0.5);
              border-radius: 10px;
          }

          #principal{
            padding: 30px;
            margin: 30px;
          }

          table {
              background-color: #F5FEFF;     
              border: 10px solid;   
          }

          th{
            background-color: #159EAE;
        }


        #encabezado{
              text-align:center;
              margin: 10px;
              padding: 4px;
              border-radius: 20px;
              color: black;
          }
      </style>
  </head>
  <body>

   @yield("titulo")        

    <nav class="blockquote text-center navbar navbar-expand-lg navbar-dark bg-info">
          <a class="navbar-brand" href="/">ShareCar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href=" {{url('/opiniones/create')}}">Opinión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link correo" href="{{route('contactanos.index')}}">Contáctanos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conductores</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{route('conductores.index')}}">Listado</a>
                  <a class="dropdown-item" href="{{route('conductores.create')}}">Crear</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pasajeros</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{route('pasajeros.index')}}">Listado</a>
                  <a class="dropdown-item" href="{{route('pasajeros.create')}}">Crear</a>
                </div>
              </li>
            </ul>
          </div>
          <form action="{{route ('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-info bottom-center">Desconectarse</button>
                </form>
        </nav>
        <div id="principal">
            @yield("contenido")
        </div>
  </body>
</html>