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
        <div class="card-body" style="border-color: rgb(4, 24, 4); border-width: 2px;">
          
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
        <div class="card mb-3">
          <div class="mt-4">
              <h5 class="docentestetxt" style="margin-left: 20px">Docentes:</h5>
              <!-- Botón para abrir el modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-left: 120px; margin-top: -50px; background-color: black">
                Añadir Docentes
            </button>
      
              <!-- Modal para seleccionar docentes -->
              <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <form action="{{ route('semestres.semestre1.addDocente', ['id' => $curso_semestre1->codigo_curso_semestre1]) }}" method="POST">
                              @csrf
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Docentes Disponibles</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                @foreach($docentes as $docente)
                                <div class="form-check">
                                    <input type="checkbox" name="seleccionados[]" value="{{ $docente->codigo }}">
                                    <label class="form-check-label">{{ $docente->nombre }}</label>
                                </div>
                            @endforeach
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Añadir Docentes</button>
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      </div>
      </div>
      <!--/ Event Details -->
    </div>
        <!-- Resto del contenido de la página -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </x-app-layout>
  