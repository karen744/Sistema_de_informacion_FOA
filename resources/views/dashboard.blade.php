<x-app-layout>
    <title>Inicio</title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <style>
            .card {
                position: relative;
                top: 50px;
                left: 100px;

            }
           

        </style>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="imagenbie4.jpeg" class="imagenbie4" alt="imagenbie4.png">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Docentes</h5>
              <p class="card-text">Programa de Tecnología en Promoción de la Salud</p>
              <p class="card-text">Si es nuevo en el sistema por favor registre sus datos</p>
              <p class="card-text"><small class="text-muted">Vincular docentes a cursos</small></p>
              <a href="{{ route('docentes') }}" class="btn btn-primary">Ver Docentes</a>
            </div>
          </div>
        </div>
      </div>

      <style>
        .card2 {
            position: relative;
            top: -335px;
            left: 600px;

        }
       

    </style>
    <div class="card2">

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="imagenbie5.jpeg" class="imagenbie" alt="imagenbie.jpeg">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Cursos - Estudiantes</h5>
          <p class="card-text">Programa de Tecnología en Promoción de la Salud</p>
          <p class="card-text"><small class="text-muted">Vincular estudiantes a cursos</small></p>
          <p class="card-text"> subir estudiantes </p>
          <a href="{{ route('semestres') }}" class="btn btn-primary">Semestres-Cursos</a>
        </div>
      </div>
    </div>
  </div>
</div>


    </x-app-layout>
