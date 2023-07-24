<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Cursos</title>
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Cursos') }}
      </h2>
  </x-slot>
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
                <th>Codigo Curso</th>
                <th>Nombre Curso</th>
                <th>Semestre</th>
                <th>Periodo</th>
                <th>Modalidad</th>
                <th>Grupo</th>
            </tr>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $estudiante->codigo_curso }}</td>
                <td>{{ $estudiante->nombre_curso}}</td>
                <td>{{ $estudiante->semestre }}</td>
                <td>{{ $estudiante->periodo }}</td>
                <td>{{ $estudiante->modalidad }}</td>
                <td>{{ $estudiante->Grupo }}</td>
            </tr>
            @endforeach
        </table>
    </div>
   
    
</body>
</html>



</x-app-layout>
</head>
</html>
