<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    
        <!-- Enlace a la hoja de estilos de Bootstrap (CSS) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cursos</title>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __(' Semestre 1 - Curso') }}
            </h2>
        </x-slot>
        <br>
  
  
  <!-- Event Profile Content -->
  <div class="row justify-content-center">
    <div class="col-md-6">
      <!-- Event Details -->
      <div class="card mb-4">
        <div class="card-body">
          
          <small class="text-muted text-uppercase">Informacion Curso</small>
          <ul class="list-unstyled mb-4 mt-3">
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Curso: </span> <span>{{$curso_semestre1->nombre_curso}}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Creditos: </span> <span>{{$curso_semestre1->creditos}}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Año: </span> <span>{{$curso_semestre1->fecha}}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Periodo: </span> <span>{{$curso_semestre1->periodo}}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Modalidad: </span> <span>{{$curso_semestre1->modalidad}}</span></li>
          </ul>
        
        <a href="{{ route('estudiantes') }}" class="btn btn-primary">Estudiantes</a>
        <a href="{{ route('formulario1.create') }}" class="btn btn-secondary " style="margin-left: 400px; margin-top: -550px">Formulario FOA 15</a>
        <a href="{{ route('formulario07.create') }}" class="btn btn-secondary " style="margin-left: 400px; margin-top: -450px">Formulario FOA 07</a>  

        <button type="button" class="btn btn-secondary" style="margin-left: 400px; margin-top: -390px">Formulario FOA 13</button>
        </div>
      </div>
      <!--/ Event Details -->
    </div>
        <!-- Resto del contenido de la página -->
    </x-app-layout>
    <style>

    </style>
    