<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3>Detalle de la incidencia</h3>
        <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">Latitud</th>
            <th scope="col">Longitud</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Dirección</th>
            <th scope="col">Descripción</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
            <td scope="col">{{ $incidencia->latitud }}</td>
            <td scope="col">{{ $incidencia->longitud }}</td>
            <td scope="col">{{ $incidencia->ciudad }}</td>
            <td scope="col">{{ $incidencia->direccion }}</td>
            <td scope="col">{{ $incidencia->descripcion }}</td>
            <td scope="col">{{ $incidencia->estado }}</td>
            <td scope="col"><a href="/">Volver</a></td>
            </tr>
            
        </tbody>   
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>