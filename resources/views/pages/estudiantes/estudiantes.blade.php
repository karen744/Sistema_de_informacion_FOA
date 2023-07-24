<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Estudiantes') }}
        </h2>
    </x-slot>
    
    <title>Estudiantes</title>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<br>
<body>
    <div class="card-body">
        <table class="table table-dark table-striped">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Contacto</th>
            </tr>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->codigo_estudiante }}</td>
                <td>{{ $estudiante->nombre_estudiante }}</td>
                <td>{{ $estudiante->contacto }}</td>
            </tr>
            @endforeach
        </table>
    </div>
   
    
</body>
</html>


    
    <!-- Resto del contenido de la página -->
</x-app-layout>
