<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Enlace a la hoja de estilos de Bootstrap (CSS) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Enlace a los scripts de dependencias de Bootstrap (jQuery y Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4Ck+cY1awNXVgZOIhTqCf/HeGfz1RG7wUIdl8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-Svv/uXQjGgNB6CG/Q5cvXy7fDF1Nx3ZB6cNhWMLvlPw7iMxhBEoU6Fg3gUibJjpP" crossorigin="anonymous"></script>

<!-- Enlace al archivo JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docentes</title>
    
</head>

</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Docentes') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Listado de Docentes</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Código de Docente</th>
                                <th>Nombre Completo</th>
                                <th>Identificación</th>
                                <th>Número de Celular</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($docentes as $docente)
                            <tr>
                                <td>{{ $docente->codigo }}</td>
                                <td>{{ $docente->nombre }}</td>
                                <td>{{ $docente->identificacion }}</td>
                                <td>{{ $docente->celular }}</td>
                                <td>{{ $docente->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Resto del contenido de la página -->
</x-app-layout>
