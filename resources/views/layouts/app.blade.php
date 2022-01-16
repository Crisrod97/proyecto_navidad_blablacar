<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
              font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
              font-size: 12px;
              margin: 0px;
              padding: 0px;
              border-radius: 20px;
              background-color: #D1F1EC;
          }

          #principal{
            padding: 30px;
            margin: 30px;
          }

          table {
              background-color: #F5FEFF;        
          }

          #encabezado{
              text-align:center;
              margin: 10px;
              padding: 4px;
              border-radius: 20px;
              color:#FF865D;
          }
      </style>
  </head>
  <body>

   @yield("titulo")        

    <nav class="blockquote text-center navbar navbar-expand-lg navbar-light bg-light">
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
        </nav>
        <div id="principal">
            @yield("contenido")
        </div>
  </body>
</html>