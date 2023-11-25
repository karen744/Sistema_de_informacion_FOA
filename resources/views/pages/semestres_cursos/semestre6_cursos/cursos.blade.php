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
    <div>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary" style="margin-left: 172px" >Registro cursos</a>
    </div>
    <br>
    <div class="container">
        <div class="row">
            
            @foreach ($cursos as $curso)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $curso->nombre_curso }}</h5>
                        <p class="card-text">Código Curso: {{ $curso->codigo_curso }}</p>
                        <p class="card-text">Semestre: {{ $curso->semestre }}</p>
                        <p class="card-text">Periodo: {{ $curso->periodo }}</p>
                        <p class="card-text">Modalidad: {{ $curso->modalidad }}</p>
                        <p class="card-text">Grupo: {{ $curso->grupo }}</p>
                        <div class="d-flex align-items-center justify-content-center mt-5">
                        <a href="{{ route('cursos.show', $curso->codigo_curso) }}" class="btn btn-primary d-flex align-items-center me-3">Ver detalles</a>
                        
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach
            
        </div>
       
    </div>
    
</body>
</html>



</x-app-layout>
</head>
</html>
