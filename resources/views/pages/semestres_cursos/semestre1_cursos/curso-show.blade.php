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


  <div class="row">
    <div class="col">
        <div class="card card1" onmouseover="moveCard(this)">
            <a href="{{ route('estudiantes') }}" ></a>
             <div class="card-body" onclick="redirigir('{{ route('estudiantes') }}')">
               <h5 class="card-title" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">REGISTRO ESTUDIANTES</h5>
                <p class="card-text">Registre mediante un documento Excel.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card card2" onmouseover="moveCard(this)">
            <div class="card-body" onclick="redirigir('{{ route('formulario1.create') }}')">
                <h5 class="card-title" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Programación Temática</h5>
                <p class="card-text">Programación Tematica por cada Asignatura</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card card3" onmouseover="moveCard(this)">
            <div class="card-body" onclick="redirigir('{{ route('formulario07.create') }}')">
                <h5 class="card-title" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Seguimiento Temático</h5>
                <p class="card-text">Seguimiento al Contenido Temático por asignatura</p>
                
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card  card4" onmouseover="moveCard(this)">
            <div class="card-body">
                <h5 class="card-title" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Informe Final</h5>
                <p class="card-text">Informe final de desarrollo de la temática de la asignatura</p>
            </div>
        </div>
    </div>
</div>
<br>
  <div class="row justify-content-center">
      <!-- Event Details -->
     
        <div class="card-body cardcurso" style="border-color: rgb(4, 24, 4); border-width: 2px; ">
          
            <div class="divtextocurso">
          <small class="text-muted text-uppercase"> <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Curso: </span> <span>{{$curso_semestre1->nombre_curso}}</span></li></small>

          <ul class="list-unstyled mb-4 mt-3">
            
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Creditos: </span> <span class="textcurso">{{$curso_semestre1->creditos}}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Año: </span> <span class="textcurso">{{$curso_semestre1->fecha}}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Periodo: </span> <span class="textcurso">{{$curso_semestre1->periodo}}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar-alt"></i><span class="fw-semibold mx-2">Modalidad: </span> <span class="textcurso">{{$curso_semestre1->modalidad}}</span></li>
          </ul>
        </div>
          <br>
        </div>
    </div>
    <br>
    <div class="card divdocentes">
        <h5 class="docentestetxt" >Docentes a Cargo:</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color: black">
              Añadir Docentes
          </button>
      </div>

        <br>
        <br>
      
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
     
      
     
     
      <!--/ Event Details -->
   
        <!-- Resto del contenido de la página -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </x-app-layout>


    <script>
        function redirigir(url) {
          window.location.href = url;
        }
        function redirigir1(url) {
            window.location.href = url;
        }
        function moveCard(card) {
            card.style.transform = "translateY(-10px)"; // Cambiamos la propiedad transform para mover la tarjeta
        }
    </script>

    <style>
        .card {
            padding-top: 5px;
            padding-right: 5px;
            padding-left: 5px;
            padding-bottom: 5px;
           
        }

        .divdocentes {
            border-width: 2px;
            border-color: black;
            width: 250px;
        }
        .card1 {
            border-width: 2px;
            border-color: black;
            font-weight: bold;
            font-size: 20px;
            width: 250px;
            height: 150px;
            background-image: url('{{ asset('card1.jpg') }}');
            transition: transform 0.3s ease; /* Agregamos una transición para suavizar el movimiento */
        }
        .card2 {
            border-width: 2px;
            border-color: black;
            width: 250px;
            height: 150px;
            background-image: url('{{ asset('card2.jpg') }}');
            transition: transform 0.3s ease; /* Agregamos una transición para suavizar el movimiento */
        }
        .card3 {
            border-width: 2px;
            border-color: black;
            width: 250px;
            height: 150px;
            background-image: url('{{ asset('card3.jpg') }}');
            transition: transform 0.3s ease; /* Agregamos una transición para suavizar el movimiento */
        }
        .card4 {
            border-width: 2px;
            border-color: black;
            width: 250px;
            height: 150px;
            background-image: url('{{ asset('card4.jpg') }}');
            transition: transform 0.3s ease; /* Agregamos una transición para suavizar el movimiento */
        }
        
        .cardcurso {
          
            background-image: url('{{ asset('12.jpg') }}');
        
        }
        .fw-semibold {
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           font-size: 20px;
        }
        .text-uppercase {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;

        }
        .textcurso {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
        }
        .divtextocurso{
            margin-left: 50px;
        }
        
        </style>
  