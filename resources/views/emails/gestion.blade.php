<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
</head>
<body>
    <h3>Departamento de gestión ShareCar</h3>
    <p>Formulario de sugerencias, quejas y otros</p>
    <p>Nombre: {{$contacto['nombre']}}</p>
    <p>Apellidos: {{$contacto['apellidos']}}</p>
    <p>Correo Electrónico: {{$contacto['email']}}</p>
    <p>Mensaje: {{$contacto['mensaje']}}</p>
    <img src="https://static.vecteezy.com/system/resources/previews/003/223/621/non_2x/carsharing-service-line-icon-with-car-vector.jpg" class="rounded mx-auto d-block" alt="Responsive image" height="150px" weight="100px">
    <p>No Reply - Por favor, no conteste a este correo, es un emai automático</p>
</body>
</html>